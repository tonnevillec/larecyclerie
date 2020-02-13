let $ = require('jquery');
global.$ = global.jQuery = $;
window.jQuery = $;
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');
require('@fortawesome/fontawesome-free/js/all');

require('chosen-js');
//require ('bootstrap-colorpicker');
require('select2');

import 'webpack-jquery-ui/autocomplete'

// or you can include specific pieces
$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
    $("select.chzn-select").chosen();
});

import dt from 'datatables.net';
import 'datatables.net-bs4';
import 'datatables.net-fixedcolumns-bs4';
import 'datatables.net-fixedheader-bs4';
import 'datatables.net-responsive-bs4';