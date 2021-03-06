<?php

session_start();   //  Must start a session before destroying it

if (isset($_SESSION))
{
    unset($_SESSION);
    session_unset();
    session_destroy();

?>
        <script>
   /**
 * Module for displaying "Waiting for..." dialog using Bootstrap
 *
 * @author Eugene Maslovich <ehpc@em42.ru>
 */

var waitingDialog = waitingDialog || (function ($) {
    'use strict';

    // Creating modal dialog's DOM
    var $dialog = $(
        '<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
        '<div class="modal-dialog modal-m">' +
        '<div class="modal-content">' +
            '<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
            '<div class="modal-body">' +
                '<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>' +
            '</div>' +
        '</div></div></div>');

    return {
        /**
         * Opens our dialog
         * @param message Custom message
         * @param options Custom options:
         *                   options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
         *                   options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
         */
        show: function (message, options) {
            // Assigning defaults
            if (typeof options === 'undefined') {
                options = {};
            }
            if (typeof message === 'undefined') {
                message = 'Loading';
            }
            var settings = $.extend({
                dialogSize: 'm',
                progressType: '',
                onHide: null // This callback runs after the dialog was hidden
            }, options);

            // Configuring dialog
            $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
            $dialog.find('.progress-bar').attr('class', 'progress-bar');
            if (settings.progressType) {
                $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
            }
            $dialog.find('h3').text(message);
            // Adding callbacks
            if (typeof settings.onHide === 'function') {
                $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                    settings.onHide.call($dialog);
                });
            }
            // Opening dialog
            // $dialog.modal();
           
            $('#ModalLogout').modal({
                show: 'true'
            });
           
            var $progress = $('.progress');
                var $progressBar = $('.progress-bar');
                var $alert = $('.alert');
                setTimeout(function() {
                    $progressBar.css('width', '10%');
                    setTimeout(function() {
                        $progressBar.css('width', '30%');
                        setTimeout(function() {
                            $progressBar.css('width', '50%');
                            setTimeout(function() {
                                $progressBar.css('width', '100%');
                                setTimeout(function() {
                                    // $progress.css('display', 'none');
                                    // $alert.css('display', 'block');
                                     location.href = 'http://www.ran.salud.gob.mx/movweb/index.php';
                                }, 200); // WAIT 5 milliseconds
                            }, 1000); // WAIT 2 seconds
                        }, 1000); // WAIT 1 seconds
                    }, 1000); // WAIT 1 seconds
                }, 1000); // WAIT 1 second
           
           
           
        },
        /**
         * Closes dialog
         */
        hide: function () {
            // $dialog.modal('hide');
           
            $('#ModalLogout').modal('hide');
        }
    };

})(jQuery);

        </script>
       
        <style>
        .progress-bar{
            background-color:#18a689;
        }
        </style>
         <div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>
<?php         
}

?>
