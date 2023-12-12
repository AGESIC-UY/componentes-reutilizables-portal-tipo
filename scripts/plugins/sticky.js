/* ========================================================================
 * sticky.js v1.0.0
 * http://github.com/ismamz/sticky
 * ======================================================================== */

+function ($) {
  'use strict';

  /**
   * Feature detect position sticky, if it exists then do nothing
   */
  // if ((function(d) {
  //   try {
  //     // some browsers will throw an error when assigning an
  //     // unsupported value to a property
  //     d.style.position = 'sticky';
  //   } catch (e) {
  //     return false;
  //   }
  //   // this will return false if the browser doesn't recognize
  //   // 'sticky' as a valid position value
  //   return d.style.position === 'sticky';
  // }(document.createElement('div')))) return;

  // STICKY CLASS DEFINITION
  // ======================

  var Sticky = function (element, options) {
    this.options = $.extend({}, Sticky.DEFAULTS, options);

    this.$target = $(this.options.target)
      .on('scroll.bs.sticky.data-api', $.proxy(this.checkPosition, this))
      .on('click.bs.sticky.data-api',  $.proxy(this.checkPositionWithEventLoop, this))
      .on('resize.bs.sticky.data-api',  $.proxy(this.onResize, this));

    this.$element        = $(element);
    this.pin             = null;
    this.initialPosition = this.$element.offset();
    this.initialWidth    = this.$element.outerWidth();
    this.initialHeight   = this.$element.outerHeight();
    this.$clone          = null;
    this.maxTopPosition  = null;
    this.$parent         = this.getParent(options.parent);

    this.getParentBottomBound();
    this.checkPosition();
  }

  Sticky.VERSION  = '1.0.0';

  Sticky.DEFAULTS = {
    target: window
  };


  Sticky.prototype.getParent = function(parentSelector) {
    var $parent;

    if (parentSelector && this.$element.closest(parentSelector)) {
      $parent = this.$element.closest(parentSelector);
    } else {
      $parent = this.$element.parent();
    }

    return $parent;
  }

  Sticky.prototype.getParentBottomBound = function () {
    var parentTop    = this.$parent.offset().top;
    var parentHeight = this.$parent.height();

    this.maxTopPosition = parentTop + parentHeight;
  }

  Sticky.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1);
  }

  Sticky.prototype.onResize = function () {
    this.initialPosition = this.$element.offset();
    this.initialWidth    = this.$element.outerWidth();
    this.initialHeight   = this.$element.outerHeight();

    this.getParentBottomBound();
    this.checkPosition();
  }

  Sticky.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return;

    var scrollTop = this.$target.scrollTop()
    var position  = this.$element.offset();

    if (this.initialPosition.top - parseInt(this.$element.css('marginTop'), 10) > scrollTop) {
      if (this.$clone) {
        this.$clone.remove();
        this.$clone = null;
        this.$element
          .trigger('unpinned.bs.sticky');
      }

      this.$element.css({ 'visibility': 'visible' });
      this.pin = false;
    } else {
      if (scrollTop + this.initialHeight < this.maxTopPosition) {
        if (this.$clone) {
          this.$clone.css({ position: 'fixed', top: 0 });
        }
      } else {
        if (this.$clone) {
          this.$clone.css({ position: 'absolute', top: this.maxTopPosition - this.initialHeight });
        }
      }

      if (!this.$clone) {
        this.$clone = this.$element.clone(true, true).appendTo('body');
        this.$element
          .css({ 'visibility': 'hidden' })
          .trigger('pinned.bs.sticky');
      }

      this.$clone
        .removeClass('unpinned')
        .addClass('pinned')
        .css({ width: this.initialWidth, left: this.initialPosition.left });

      this.pin = true;
    }
  }


  // STICKY PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this);
      var data    = $this.data('bs.sticky');
      var options = typeof option == 'object' && option;

      if (!data) $this.data('bs.sticky', (data = new Sticky(this, options)));
      if (typeof option == 'string') data[option]();
    });
  }

  var old = $.fn.sticky;

  $.fn.sticky             = Plugin;
  $.fn.sticky.Constructor = Sticky;


  // STICKY NO CONFLICT
  // =================

  $.fn.sticky.noConflict = function () {
    $.fn.sticky = old;
    return this;
  }


  // STICKY DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-position="sticky"]').each(function () {
      var $element = $(this);
      var data = $element.data();

      Plugin.call($element, data);
    });
  });

}(jQuery);

// $('.sticky').on('pinned.bs.sticky', function() {
//   console.log('pinned');
// });
