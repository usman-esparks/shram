/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery',
    'nanoscroller'
], function ($) {
    'use strict';

    return function (widget) {
        $.widget('mage.sidebar', widget, {
            /**
             * Add 'overflowed' class to minicart items wrapper element
             *
             * @private
             */
            _isOverflowed: function () {
                setTimeout(function () {
                    if (!$('.minicart-items-wrapper').hasClass('nano-content')) {
                        $('.minicart-items-wrapper').addClass('nano-content').wrap('<div class="nano"></div>');
                    }
                    $('#minicart-content-wrapper .nano').nanoScroller();
                }, 500);
            },

            /**
             * Calculate height of minicart list
             *
             * @private
             */
            _calcHeight: function () {
                return this;
            }
        });

        return $.mage.sidebar;
    }
});
