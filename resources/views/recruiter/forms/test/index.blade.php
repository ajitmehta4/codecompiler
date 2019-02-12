@extends('layouts.recruiter')

@section('assets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/datepicker/DateTimePicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/datepicker/DateTimePicker.css') }}" />
@endsection
@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="col-sm-12 d-breadcrumb">
                <div class="col-sm-4">
                    <h4>Tests</h4>
                </div>
                <div class="col-sm-8 text-right nopadding">
                    <input type="text" placeholder="search test" class="qul-search" />
                    <a href="#" data-toggle="modal" data-target="#create_test"><i class="fas fa-plus-square mr-5"></i>Create Test</a>
                </div>
            </div>
            <div class="col-sm-12 test_list_main">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#active" aria-controls="active" role="tab" data-toggle="tab">Active (4)</a></li>
                    <li role="presentation"><a href="#published" aria-controls="published" role="tab" data-toggle="tab">Published (1)</a></li>
                    <li role="presentation"><a href="#drafts" aria-controls="drafts" role="tab" data-toggle="tab">Drafts (5)</a></li>
                    <li role="presentation"><a href="#completed" aria-controls="completed" role="tab" data-toggle="tab">Completed (12)</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="active">
                        <div class="row">
                            <div class="col-sm-12 test-list-main">
                                <div class="col-sm-12 test-list-box">
                                    <div class="col-sm-9">
                                        <h2>Test Name goes hete</h2>
                                        <p class="meta-test"><span><i class="fas fa-user-tie mr-5"></i>Dhaval Khatri</span><span><i class="far fa-calendar-alt mr-5"></i> 25 Jan, 2019 to 15 Feb, 2019</span></p>
                                        <p class="tl2-skill">Skills to test <span>PHP</span><span>CodeIgnitor</span></p>
                                    </div>
                                    <div class="col-sm-3 test-list-r-btns">
                                        <a href="invite_candidate.html" class="in my-awesome-bg">Invite Candidates</a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="View Analytics"><i class="far fa-chart-bar"></i></a>
                                        <br>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Add /  Edit Delete"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Preview Test"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="End Test"><i class="far fa-times-circle"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Clone Test"><i class="far fa-clone"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Delete Test"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-sm-12 tl-2-data">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-users"></i>
                                                        <p>Invited</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-edit"></i>
                                                        <p>Registered</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-clock"></i>
                                                        <p>Submission Pending</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-check"></i>
                                                        <p>Completed</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-lock"></i>
                                                        <p>Shortlisted</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-times"></i>
                                                        <p>Rejected</p>
                                                        <h3>0</h3>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-12 tl-2-morebutton">
                                        <a href="#" id="more-detail-btn">More Details<i class="glyphicon glyphicon-menu-down"></i></a>
                                    </div>
                                    <div class="col-sm-12" id="more-test-details" style="display: none">
                                        <div class="col-sm-12 que-round-box">
                                            <div class="col-sm-6 qrb-left">
                                                <h4><span><i class="far fa-list-alt mr-5"></i>20 Questions</span><span><i class="far fa-star mr-5"></i>100 marks</span><span><i class="far fa-clock mr-5"></i>45 mins</span></h4>
                                                <p>Multiple Choice : 10 | 10 marks each | css3, html5</p>
                                                <p>coding : 10 | 10 marks each | Java, mySql</p>
                                            </div>
                                            <div class="col-sm-6 text-right qrb-right">
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-warning-sign mr-5 color-orange"></i>0 of 20 Questions Added</h6>
                                                <a href="add_test_3_que.html">Add Questions</a><br>
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-ok mr-5 color-green"></i>Test Settings Added</h6>
                                                <a href="add_test_3_setting.html">Edit Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 test-list-box">
                                    <div class="col-sm-9">
                                        <h2>Test Name goes hete</h2>
                                        <p class="meta-test"><span><i class="fas fa-user-tie mr-5"></i>Dhaval Khatri</span><span><i class="far fa-calendar-alt mr-5"></i> 25 Jan, 2019 to 15 Feb, 2019</span></p>
                                        <p class="tl2-skill">Skills to test <span>PHP</span><span>CodeIgnitor</span></p>
                                    </div>
                                    <div class="col-sm-3 test-list-r-btns">
                                        <a href="invite_candidate.html" class="in my-awesome-bg">Invite Candidates</a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="View Analytics"><i class="far fa-chart-bar"></i></a>
                                        <br>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Add /  Edit Delete"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Preview Test"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="End Test"><i class="far fa-times-circle"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Clone Test"><i class="far fa-clone"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Delete Test"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-sm-12 tl-2-data">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-users"></i>
                                                        <p>Invited</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-edit"></i>
                                                        <p>Registered</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-clock"></i>
                                                        <p>Submission Pending</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-check"></i>
                                                        <p>Completed</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-lock"></i>
                                                        <p>Shortlisted</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-times"></i>
                                                        <p>Rejected</p>
                                                        <h3>0</h3>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-12 tl-2-morebutton">
                                        <a href="#" id="A1">More Details<i class="glyphicon glyphicon-menu-down"></i></a>
                                    </div>
                                    <div class="col-sm-12" id="Div1" style="display: none">
                                        <div class="col-sm-12 que-round-box">
                                            <div class="col-sm-6 qrb-left">
                                                <h4><span><i class="far fa-list-alt mr-5"></i>20 Questions</span><span><i class="far fa-star mr-5"></i>100 marks</span><span><i class="far fa-clock mr-5"></i>45 mins</span></h4>
                                                <p>Multiple Choice : 10 | 10 marks each | css3, html5</p>
                                                <p>coding : 10 | 10 marks each | Java, mySql</p>
                                            </div>
                                            <div class="col-sm-6 text-right qrb-right">
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-warning-sign mr-5 color-orange"></i>0 of 20 Questions Added</h6>
                                                <a href="add_test_3_que.html">Add Questions</a><br>
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-ok mr-5 color-green"></i>Test Settings Added</h6>
                                                <a href="add_test_3_setting.html">Edit Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="published">
                        <div class="row">
                            <div class="col-sm-12 test-list-main">
                                <div class="col-sm-12 test-list-box">
                                    <div class="col-sm-9">
                                        <h2>Test Name goes hete</h2>
                                        <p class="meta-test"><span><i class="fas fa-user-tie mr-5"></i>Dhaval Khatri</span><span><i class="far fa-calendar-alt mr-5"></i> 25 Jan, 2019 to 15 Feb, 2019</span></p>
                                        <p class="tl2-skill">Skills to test <span>PHP</span><span>CodeIgnitor</span></p>
                                    </div>
                                    <div class="col-sm-3 test-list-r-btns">
                                        <a href="#" class="in">Invite Candidates</a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="View Analytics"><i class="far fa-chart-bar"></i></a>
                                        <br>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Add /  Edit Delete"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Preview Test"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="End Test"><i class="far fa-times-circle"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Clone Test"><i class="far fa-clone"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Delete Test"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-sm-12 tl-2-data">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-users"></i>
                                                        <p>Invited</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-edit"></i>
                                                        <p>Registered</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-clock"></i>
                                                        <p>Submission Pending</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-check"></i>
                                                        <p>Completed</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-lock"></i>
                                                        <p>Shortlisted</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-times"></i>
                                                        <p>Rejected</p>
                                                        <h3>0</h3>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-12 tl-2-morebutton">
                                        <a href="#" id="A2">More Details<i class="glyphicon glyphicon-menu-down"></i></a>
                                    </div>
                                    <div class="col-sm-12" id="Div2" style="display: none">
                                        <div class="col-sm-12 que-round-box">
                                            <div class="col-sm-6 qrb-left">
                                                <h4><span><i class="far fa-list-alt mr-5"></i>20 Questions</span><span><i class="far fa-star mr-5"></i>100 marks</span><span><i class="far fa-clock mr-5"></i>45 mins</span></h4>
                                                <p>Multiple Choice : 10 | 10 marks each | css3, html5</p>
                                                <p>coding : 10 | 10 marks each | Java, mySql</p>
                                            </div>
                                            <div class="col-sm-6 text-right qrb-right">
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-warning-sign mr-5 color-orange"></i>0 of 20 Questions Added</h6>
                                                <a href="add_test_3_que.html">Add Questions</a><br>
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-ok mr-5 color-green"></i>Test Settings Added</h6>
                                                <a href="add_test_3_setting.html">Edit Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="drafts">
                        <div class="row">
                            <div class="col-sm-12 test-list-main">
                                <div class="col-sm-12 test-list-box">
                                    <div class="col-sm-9">
                                        <h2>Test Name goes hete</h2>
                                        <p class="meta-test"><span><i class="fas fa-user-tie mr-5"></i>Dhaval Khatri</span><span><i class="far fa-calendar-alt mr-5"></i> 25 Jan, 2019 to 15 Feb, 2019</span></p>
                                        <p class="tl2-skill">Skills to test <span>PHP</span><span>CodeIgnitor</span></p>
                                    </div>
                                    <div class="col-sm-3 test-list-r-btns">
                                        <a href="#" class="in">Add / Edit Details</a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Preview Test"><i class="fas fa-eye"></i></a>
                                        <br>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Clone Test"><i class="far fa-clone"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Delete Test"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-sm-12 tl-2-morebutton">
                                        <a href="#" id="A3">More Details<i class="glyphicon glyphicon-menu-down"></i></a>
                                    </div>
                                    <div class="col-sm-12" id="Div3" style="display: none">
                                        <div class="col-sm-12 que-round-box">
                                            <div class="col-sm-6 qrb-left">
                                                <h4><span><i class="far fa-list-alt mr-5"></i>20 Questions</span><span><i class="far fa-star mr-5"></i>100 marks</span><span><i class="far fa-clock mr-5"></i>45 mins</span></h4>
                                                <p>Multiple Choice : 10 | 10 marks each | css3, html5</p>
                                                <p>coding : 10 | 10 marks each | Java, mySql</p>
                                            </div>
                                            <div class="col-sm-6 text-right qrb-right">
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-warning-sign mr-5 color-orange"></i>0 of 20 Questions Added</h6>
                                                <a href="add_test_3_que.html">Add Questions</a><br>
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-ok mr-5 color-green"></i>Test Settings Added</h6>
                                                <a href="add_test_3_setting.html">Edit Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="completed">
                        <div class="row">
                            <div class="col-sm-12 test-list-main">
                                <div class="col-sm-12 test-list-box">
                                    <div class="col-sm-9">
                                        <h2>Test Name goes hete</h2>
                                        <p class="meta-test"><span><i class="fas fa-user-tie mr-5"></i>Dhaval Khatri</span><span><i class="far fa-calendar-alt mr-5"></i> 25 Jan, 2019 to 15 Feb, 2019</span></p>
                                        <p class="tl2-skill">Skills to test <span>PHP</span><span>CodeIgnitor</span></p>
                                    </div>
                                    <div class="col-sm-3 test-list-r-btns">
                                        <a href="#" class="in">View Performance Report</a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="View Analytics"><i class="far fa-chart-bar"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Preview Test"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Clone Test"><i class="far fa-clone"></i></a>
                                        <a href="#" class="tl-btn-square" data-toggle="tooltip" data-placement="left" title="Delete Test"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-sm-12 tl-2-data">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-users"></i>
                                                        <p>Invited</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-edit"></i>
                                                        <p>Registered</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-clock"></i>
                                                        <p>Submission Pending</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-check"></i>
                                                        <p>Completed</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-lock"></i>
                                                        <p>Shortlisted</p>
                                                        <h3>18</h3>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fas fa-user-times"></i>
                                                        <p>Rejected</p>
                                                        <h3>0</h3>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-12 tl-2-morebutton">
                                        <a href="#" id="A4">More Details<i class="glyphicon glyphicon-menu-down"></i></a>
                                    </div>
                                    <div class="col-sm-12" id="Div4" style="display: none">
                                        <div class="col-sm-12 que-round-box">
                                            <div class="col-sm-6 qrb-left">
                                                <h4><span><i class="far fa-list-alt mr-5"></i>20 Questions</span><span><i class="far fa-star mr-5"></i>100 marks</span><span><i class="far fa-clock mr-5"></i>45 mins</span></h4>
                                                <p>Multiple Choice : 10 | 10 marks each | css3, html5</p>
                                                <p>coding : 10 | 10 marks each | Java, mySql</p>
                                            </div>
                                            <div class="col-sm-6 text-right qrb-right">
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-warning-sign mr-5 color-orange"></i>0 of 20 Questions Added</h6>
                                                <a href="add_test_3_que.html">Add Questions</a><br>
                                                <h6 class="tlinfor-more"><i class="glyphicon glyphicon-ok mr-5 color-green"></i>Test Settings Added</h6>
                                                <a href="add_test_3_setting.html">Edit Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Add Question -->
    <div class="modal fade" id="add-mcq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content add-que-modal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Multiple Choice (css 3.0) question - 10 marks</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal add-que-form">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Question Title</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" name="editordata"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tags</label>
                                    <div class="col-sm-10">
                                        <select class="skills d-form" name="states[]" multiple="multiple">
                                            <optgroup label="Suggested Skills">
                                                <option value="AL">Java</option>
                                                <option value="WY">Python</option>
                                                <option value="WY">Ruby</option>
                                            </optgroup>
                                            <optgroup label="Related Skills">
                                                <option value="AL">Java</option>
                                                <option value="WY">Python</option>
                                                <option value="WY">Ruby</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Answer Choice</label>
                                    <div class="col-sm-10">
                                        <table class="choice-tble table-bordered">
                                            <tr>
                                                <td>A</td>
                                                <td>
                                                    <textarea id="choice1" name="editordata"></textarea>
                                                </td>
                                                <td>
                                                    <a href="#"><i class="glyphicon glyphicon-ok"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                <td>
                                                    <textarea id="choice2" name="editordata"></textarea>
                                                </td>
                                                <td>
                                                    <a href="#"><i class="glyphicon glyphicon-ok"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>
                                                    <textarea id="choice3" name="editordata"></textarea>
                                                </td>
                                                <td class="selected">
                                                    <a href="#"><i class="glyphicon glyphicon-ok"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                <td>
                                                    <textarea id="choice4" name="editordata"></textarea>
                                                </td>
                                                <td>
                                                    <a href="#"><i class="glyphicon glyphicon-ok"></i></a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="ct-moreque-link mt-20">
                                            <a href="#"><i class="far fa-plus-square"></i>Add more choice</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Difficulty</label>
                                    <div class="col-sm-10">
                                        <select class="form-control d-form">
                                            <option>Easy</option>
                                            <option>Medium</option>
                                            <option>Hard</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-line">Save as Draft</button>
                    <button type="button" class="btn-fill"><i class="fas fa-plus mr-5"></i>Add to Test</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload File -->
    <div class="modal fade" id="upload-que" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content my-modal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Upload MCQ Questions (CSV)</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 uq-top">
                            <div class="col-sm-6 nopadding">
                                <p>This is how your csv file should look like</p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="#">Download skill list</a>
                                <a href="#">Download Sample file</a>
                            </div>
                        </div>
                        <div class="col-sm-12 uq-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Problem Title</th>
                                        <th>Code Snippet</th>
                                        <th>Correct Answer</th>
                                        <th>Difficulty</th>
                                        <th>Skill</th>
                                        <th>Topic</th>
                                        <th>Answer Option 1</th>
                                        <th>Answer Option 2</th>
                                        <th>Answer Option 3</th>
                                        <th>Answer Option 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PHP Framework</td>
                                        <td>function($argument) {}</td>
                                        <td>1</td>
                                        <td>easy</td>
                                        <td>PHP</td>
                                        <td>inheritance</td>
                                        <td>security</td>
                                        <td>Silex</td>
                                        <td>Slim</td>
                                        <td>Lumen</td>
                                    </tr>
                                    <tr>
                                        <td>PHP Framework</td>
                                        <td>function($argument) {}</td>
                                        <td>1</td>
                                        <td>easy</td>
                                        <td>PHP</td>
                                        <td>inheritance</td>
                                        <td>security</td>
                                        <td>Silex</td>
                                        <td>Slim</td>
                                        <td>Lumen</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 file-upload-box">
                            <div class="form-group file-area">
                                <label>Upload your file</label><br>
                                <input type="file" name="images" id="images" required="required" multiple="multiple" />
                                <div class="file-dummy">
                                    <div class="success">Great, your file is selected. Keep on.</div>
                                    <div class="default">Please select your files</div>
                                </div>
                            </div>
                            <div class="col-sm-12 uq-note">
                                <h4><span>Note :</span><br>
                                    You can upload only 1 questions to this MCQ Topic.<br>
                                    If you try to upload more number of questions with CSV,system will automatically take 1 questions and add to this MCQ Topic
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="d-btn">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Test Modal Starts-->
    <div class="modal fade" id="create_test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content create-test-modal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-12 ctm-right">
                            <h2>Create a New Test</h2>
                            <form>
                                <div class="form-group col-sm-8 welcome-skils-main">
                                    <label>What role is this test for?</label>
                                    <select class="welcome-skils" name="states[]">
                                        <option>Software Developer</option>
                                        <option>Full stack Developer</option>
                                        <option>Front-end Developer</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 welcome-skils-main">
                                    <label>Work Experience</label>
                                    <select class="welcome-skils" name="states[]">
                                        <option>Intern</option>
                                        <option>New Graduate</option>
                                        <option>0-2 years</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-8">
                                    <label>Test Name</label>
                                    <input type="text" class="form-control" placeholder="E.g: Database and security">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Duration</label>
                                    <input type="text" class="form-control" placeholder="60">
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-8 col-sm-offset-2 mt-30">
                                        <a href="add_test_1.html" class="btn btn-block btn-primary">Create Test</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Test Modal Ends -->
    @endsection

   @section('assetjs')
    <script type="text/javascript" src="{{ asset('vendor/summernote/summernote.js') }}"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $('#summernote').summernote({
            placeholder: 'Question Title',
            height: 100
        });
        $('#choice1').summernote({
            height: 70
        });
        $('#choice2').summernote({
            height: 70
        });
        $('#choice3').summernote({
            height: 70
        });
        $('#choice4').summernote({
            height: 70
        });

        $(document).ready(function () {
            $('.dropdown-submenu a.test').on("click", function (e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });

        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }

        $(document).ready(function () {
            $('.skills').select2();
        });

        // Multi select skill
        $(document).ready(function () {
            $('.welcome-skils').select2();
        });

        $('.more-link-change').click(function () {
            $(this).text(function (i, old) {
                return old == 'more details' ? 'less details' : 'more details';
            });
        });

        $("#more-detail-btn").click(function () {
            $("#more-test-details").toggle(500);
        });
    </script>
@endsection
