<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">New Application Screen</h3>
            </div>
            <!-- /.col-lg-12 -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">

                <form id="regForm" action="">

                    <!-- Template Selection -->
                    <div class="tab">
                        <h4>1. Select Screen Template</h4>
                        <hr>
                        <div class="cc-selector">
                            <div class="row">
                                <div class="col-md-3">
                                    <input id="splash_radio" type="radio" name="screen_temp" value="splash"/>
                                    <label class="drinkcard-cc splash" for="splash_radio"></label>
                                    <h5>Splash Screen</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="welcome_radio" type="radio" name="screen_temp" value="welcome"/>
                                    <label class="drinkcard-cc welcome" for="welcome_radio"></label>
                                    <h5>Welcome Screen</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="login_radio" type="radio" name="screen_temp" value="login"/>
                                    <label class="drinkcard-cc login" for="login_radio"></label>
                                    <h5>Welcome Screen</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="hamburger_radio" type="radio" name="screen_temp" value="hamburger"/>
                                    <label class="drinkcard-cc hamburger" for="hamburger_radio"></label>
                                    <h5>Hamburger menu</h5>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <input id="simple_list_radio" type="radio" name="screen_temp" value="simple_list"/>
                                    <label class="drinkcard-cc simple_list" for="simple_list_radio"></label>
                                    <h5>Simple List</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="list_tab_radio" type="radio" name="screen_temp" value="tab_list"/>
                                    <label class="drinkcard-cc list_tab" for="list_tab_radio"></label>
                                    <h5>List with tabs</h5>
                                </div>
                                <div class="col-md-3">
                                    <input id="form_radio" type="radio" name="screen_temp" value="form"/>
                                    <label class="drinkcard-cc formradio" for="form_radio"></label>
                                    <h5>Form Screen</h5>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!--End Template Selection -->

                    <!--Template Setup -->

                    <div class="tab">
                        <h4>2. Template Setting</h4>
                        <hr>

                        <div id="splash_setting">
                            <p>Splash Screen Setting</p>
                        </div>
                        <div id="welcome_setting"> Welcome Setting</div>
                        <div id="login_setting">Login Setting</div>
                        <div id="hamburger_setting"> hamburger Setting</div>
                        <div id="list_setting">List setting</div>
                        <div id="list_with_tab_setting">List with tab setting</div>
                        <div id="form_setting">Form</div>

                    </div>

                    <!--End Template Setup -->

                    <!--Third Party API Setup -->

                    <div class="tab">
                        <h4>Third Party API Setup:</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <select class="form-control">
                                    <option>GET</option>
                                    <option>POST</option>
                                    <option>PUT</option>
                                    <option>DELETE</option>
                                    <option>PATCH</option>
                                </select></div>
                            <div class="col-md-9"><input type="text" class="form-control"
                                                         placeholder="Enter request URL"></div>
                            <div class="col-md-1">
                                <button type="button" id="" class="btn btn-default">Send</button>
                            </div>
                        </div>
                        <hr>
                        <h4>Response</h4>
                        <hr>
                        <textarea class="form-control" readonly rows="8">{
    "Projects": [
        {
            "DueDate": "6/13/2018 5:00:00 PM",
            "id": "65296.25303.41872.22750",
            "name": "BhartNet-003",
            "count": 8,
            "type": "Project Space"
        },
        {
            "DueDate": "12/30/2017 5:00:00 PM",
            "id": "65296.25303.48828.52504",
            "name": "Bharat Net",
            "count": 0,
            "type": "Project Space"
        },
        {
            "DueDate": "7/3/2018 8:00:00 AM",
            "id": "65296.25303.31124.30866",
            "name": "BharatNetDemo-1",
            "count": 3,
            "type": "Project Space"
        }
    ]
}
                        </textarea>
                        <hr>
                        <h4>Map Keys</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><img
                                        src="<?php echo base_url('assets/images/Temp1_option1.png') ?>" width="100%"
                                        style="border: 1px solid #e3e3e3"></div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3 align-right"><label>Item ID(item_id)</label></div>
                                    <div class="col-md-3 align-right"><input type="text" class="form-control"
                                                                             placeholder="Label"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Default">
                                    </div>
                                    <div class="col-md-3"><select class="form-control">
                                            <option>"Projects"."DueDate"</option>
                                            <option>"Projects"."id"</option>
                                            <option>"Projects"."name"</option>
                                            <option>"Projects"."type"</option>
                                            <option>"array"."keyname"</option>
                                        </select></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 align-right"><label>Item Title(item_title)</label></div>
                                    <div class="col-md-3 align-right"><input type="text" class="form-control"
                                                                             placeholder="Label"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Default">
                                    </div>
                                    <div class="col-md-3"><select class="form-control">
                                            <option>"Projects"."DueDate"</option>
                                            <option>"Projects"."id"</option>
                                            <option>"Projects"."name"</option>
                                            <option>"Projects"."type"</option>
                                            <option>"array"."keyname"</option>
                                        </select></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 align-right"><label>Details 1(detail_1)</label></div>
                                    <div class="col-md-3 align-right"><input type="text" class="form-control"
                                                                             placeholder="Label"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Default">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option>"Projects"."DueDate"</option>
                                            <option>"Projects"."id"</option>
                                            <option>"Projects"."name"</option>
                                            <option>"Projects"."type"</option>
                                            <option>"array"."keyname"</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 align-right"><label>Details 2(D2)</label></div>
                                    <div class="col-md-3 align-right"><input type="text" class="form-control"
                                                                             placeholder="Label"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Default">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option>"Projects"."DueDate"</option>
                                            <option>"Projects"."id"</option>
                                            <option>"Projects"."name"</option>
                                            <option>"Projects"."type"</option>
                                            <option>"array"."keyname"</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--End Third Party API Setup -->

                    <!-- Template Element Action Setup -->

                    <div class="tab">
                        <h4>Element Actions:</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3">

                                </div>

                            </div>
                        </div>

                    </div>
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:left;">
                            <button type="button" id="prevBtn" class="btn btn-default" onclick="nextPrev(-1)">Previous
                            </button>
                            <button type="button" id="nextBtn" class="btn btn-success" onclick="nextPrev(1)">Save &
                                Continue
                            </button>
                        </div>
                    </div>

                    <!-- End Template Element Action Setup -->

                </form>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

