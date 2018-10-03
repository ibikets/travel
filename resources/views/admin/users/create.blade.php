@extends('layouts.admin')

@section('title')
    Add New Staff
@stop

@section('body')

    <div class="container-fluid">
        <div class="block-header">
            <h1>Create A Client</h1>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INPUT
                            <small>Different sizes and widths</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">Different Widths</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-6" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-6" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">Different Sizes</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Large Input" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Default Input" />
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Small Input" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">Floating Label Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" />
                                        <label class="form-label">Large Input</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" />
                                        <label class="form-label">Default Input</label>
                                    </div>
                                </div>
                                <div class="form-group form-float form-group-sm">
                                    <div class="form-line">
                                        <input type="text" class="form-control" />
                                        <label class="form-label">Small Input</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">Input Status</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" value="Focused" placeholder="Statu Focused" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line disabled">
                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
        <!-- Textarea -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>TEXTAREA</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Example</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">
                            Auto Growing Vertical Direction
                            <small>Taken from <a href="https://github.com/jackmoore/autosize/tree/master" target="_blank">github.com/jackmoore/autosize/tree/master</a></small>
                        </h2>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want... And please don't forget the ENTER key press multiple times :)"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Textarea -->
        <!-- Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            SELECT
                            <small>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" disabled>
                                    <option value="">Disabled</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Select -->
        <!-- Checkbox -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CHECKBOX
                            <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="demo-checkbox">
                            <input type="checkbox" id="basic_checkbox_1" checked />
                            <label for="basic_checkbox_1">Default</label>
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                            <label for="basic_checkbox_2">Filled In</label>
                            <input type="checkbox" id="basic_checkbox_3" checked disabled />
                            <label for="basic_checkbox_3">Default - Disabled</label>
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked disabled />
                            <label for="basic_checkbox_4">Filled In - Disabled</label>
                        </div>

                        <h2 class="card-inside-title">With Material Design Colors</h2>
                        <div class="demo-checkbox">
                            <input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked />
                            <label for="md_checkbox_1">RED</label>
                            <input type="checkbox" id="md_checkbox_2" class="chk-col-pink" checked />
                            <label for="md_checkbox_2">PINK</label>
                            <input type="checkbox" id="md_checkbox_3" class="chk-col-purple" checked />
                            <label for="md_checkbox_3">PURPLE</label>
                            <input type="checkbox" id="md_checkbox_4" class="chk-col-deep-purple" checked />
                            <label for="md_checkbox_4">DEEP PURPLE</label>
                            <input type="checkbox" id="md_checkbox_5" class="chk-col-indigo" checked />
                            <label for="md_checkbox_5">INDIGO</label>
                            <input type="checkbox" id="md_checkbox_6" class="chk-col-blue" checked />
                            <label for="md_checkbox_6">BLUE</label>
                            <input type="checkbox" id="md_checkbox_7" class="chk-col-light-blue" checked />
                            <label for="md_checkbox_7">LIGHT BLUE</label>
                            <input type="checkbox" id="md_checkbox_8" class="chk-col-cyan" checked />
                            <label for="md_checkbox_8">CYAN</label>
                            <input type="checkbox" id="md_checkbox_9" class="chk-col-teal" checked />
                            <label for="md_checkbox_9">TEAL</label>
                            <input type="checkbox" id="md_checkbox_10" class="chk-col-green" checked />
                            <label for="md_checkbox_10">GREEN</label>
                            <input type="checkbox" id="md_checkbox_11" class="chk-col-light-green" checked />
                            <label for="md_checkbox_11">LIGHT GREEN</label>
                            <input type="checkbox" id="md_checkbox_12" class="chk-col-lime" checked />
                            <label for="md_checkbox_12">LIME</label>
                            <input type="checkbox" id="md_checkbox_13" class="chk-col-yellow" checked />
                            <label for="md_checkbox_13">YELLOW</label>
                            <input type="checkbox" id="md_checkbox_14" class="chk-col-amber" checked />
                            <label for="md_checkbox_14">AMBER</label>
                            <input type="checkbox" id="md_checkbox_15" class="chk-col-orange" checked />
                            <label for="md_checkbox_15">ORANGE</label>
                            <input type="checkbox" id="md_checkbox_16" class="chk-col-deep-orange" checked />
                            <label for="md_checkbox_16">DEEP ORANGE</label>
                            <input type="checkbox" id="md_checkbox_17" class="chk-col-brown" checked />
                            <label for="md_checkbox_17">BROWN</label>
                            <input type="checkbox" id="md_checkbox_18" class="chk-col-grey" checked />
                            <label for="md_checkbox_18">GREY</label>
                            <input type="checkbox" id="md_checkbox_19" class="chk-col-blue-grey" checked />
                            <label for="md_checkbox_19">BLUE GREY</label>
                            <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
                            <label for="md_checkbox_20">BLACK</label>
                        </div>

                        <h2 class="card-inside-title">With Material Design Colors - Filled In</h2>
                        <div class="demo-checkbox">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" checked />
                            <label for="md_checkbox_21">RED</label>
                            <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" checked />
                            <label for="md_checkbox_22">PINK</label>
                            <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-purple" checked />
                            <label for="md_checkbox_23">PURPLE</label>
                            <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-deep-purple" checked />
                            <label for="md_checkbox_24">DEEP PURPLE</label>
                            <input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-indigo" checked />
                            <label for="md_checkbox_25">INDIGO</label>
                            <input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-blue" checked />
                            <label for="md_checkbox_26">BLUE</label>
                            <input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-light-blue" checked />
                            <label for="md_checkbox_27">LIGHT BLUE</label>
                            <input type="checkbox" id="md_checkbox_28" class="filled-in chk-col-cyan" checked />
                            <label for="md_checkbox_28">CYAN</label>
                            <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-teal" checked />
                            <label for="md_checkbox_29">TEAL</label>
                            <input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-green" checked />
                            <label for="md_checkbox_30">GREEN</label>
                            <input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-light-green" checked />
                            <label for="md_checkbox_31">LIGHT GREEN</label>
                            <input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-lime" checked />
                            <label for="md_checkbox_32">LIME</label>
                            <input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" checked />
                            <label for="md_checkbox_33">YELLOW</label>
                            <input type="checkbox" id="md_checkbox_34" class="filled-in chk-col-amber" checked />
                            <label for="md_checkbox_34">AMBER</label>
                            <input type="checkbox" id="md_checkbox_35" class="filled-in chk-col-orange" checked />
                            <label for="md_checkbox_35">ORANGE</label>
                            <input type="checkbox" id="md_checkbox_36" class="filled-in chk-col-deep-orange" checked />
                            <label for="md_checkbox_36">DEEP ORANGE</label>
                            <input type="checkbox" id="md_checkbox_37" class="filled-in chk-col-brown" checked />
                            <label for="md_checkbox_37">BROWN</label>
                            <input type="checkbox" id="md_checkbox_38" class="filled-in chk-col-grey" checked />
                            <label for="md_checkbox_38">GREY</label>
                            <input type="checkbox" id="md_checkbox_39" class="filled-in chk-col-blue-grey" checked />
                            <label for="md_checkbox_39">BLUE GREY</label>
                            <input type="checkbox" id="md_checkbox_40" class="filled-in chk-col-black" checked />
                            <label for="md_checkbox_40">BLACK</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Checkbox -->
        <!-- Radio -->

        <!-- #END# Radio -->
        <!-- Switch Button -->

        <!--#END# Switch Button -->

    </div>

@stop