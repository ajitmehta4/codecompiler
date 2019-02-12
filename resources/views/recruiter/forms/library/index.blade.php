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
                    <h4>Question Library</h4>
                </div>
                <div class="col-sm-8 text-right nopadding">
                    <a href="#" data-toggle="modal" data-target="#upload-que"><i class="fas fa-file-upload mr-5"></i>Upload Question Sheet</a>
                    <a href="#" data-toggle="modal" data-target="#add-mcq"><i class="fas fa-plus-square mr-5"></i>Add Questions</a>
                    <a href="#" data-toggle="modal" data-target="#add-coding"><i class="fas fa-plus-square mr-5"></i>Add Coding Que. Sample</a>
                </div>
            </div>
            <div class="col-sm-12 question-list-main display-flex">
                <div class="col-sm-3 display-flex padd-right-0">
                    <div class="col-sm-12 question-list-filter-main">
                        <div class="col-sm-12 filter-title-top">
                            <h3>Filter Questions</h3>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Reset"><i class="fas fa-sync-alt"></i></a>
                        </div>
                        <div class="col-sm-12 filter-box-2">
                            <h4>Question Category</h4>
                            <ul>
                                <li>
                                    <label class="display-line d-check">
                                        Multiple Choice
                                        <input type="checkbox" checked="checked" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>42,695</span>
                                </li>
                                <li>
                                    <label class="display-line d-check">
                                        Coding
                                        <input type="checkbox" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>1275</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 filter-box-2">
                            <h4>Library</h4>
                            <ul>
                                <li>
                                    <label class="display-line d-check">
                                        BM Library
                                        <input type="checkbox" checked="checked" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>42,695</span>
                                </li>
                                <li>
                                    <label class="display-line d-check">
                                        My Library
                                        <input type="checkbox" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>58</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 filter-box-2">
                            <h4>Difficulty Level</h4>
                            <ul>
                                <li>
                                    <label class="display-line d-check">
                                        Easy
                                        <input type="checkbox" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>42,695</span>
                                </li>
                                <li>
                                    <label class="display-line d-check">
                                        Medium
                                        <input type="checkbox" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>58</span>
                                </li>
                                <li>
                                    <label class="display-line d-check">
                                        Hard
                                        <input type="checkbox" />
                                        <span class="checkmark-ch"></span>
                                    </label>
                                    <span>58</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 que-right que-right-list question-list-modifed">
                    <div class="col-sm-12 question-list-top-2">
                        <div class="col-sm-4 nopadding">
                            <h3 class="cfl-title">92,742 Questions</h3>
                        </div>
                        <div class="col-sm-8 nopadding text-right">
                            <input type="text" placeholder="search title, tag.." class="qul-search" />
                        </div>
                    </div>
                    <div class="col-sm-12 ql-filters-data">
                        <p><span>Library</span>BM Library, <span>Que. types</span>MCQ, Coding</p>
                    </div>
                    <div class="col-sm-12 ql-list">
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table? Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-green" data-toggle="tooltip" data-placement="left" title="Easy"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">table</span>
                                <a href="#" class="actn-btn" data-toggle="tooltip" data-placement="left" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="#" class="actn-btn" data-toggle="tooltip" data-placement="left" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options2">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options2">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-orange" data-toggle="tooltip" data-placement="left" title="Medium"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">table</span>
                            </div>
                        </div>
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options3">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options3">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-red" data-toggle="tooltip" data-placement="left" title="Hard"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">front-end</span>
                            </div>
                        </div>
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options4">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options4">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-red" data-toggle="tooltip" data-placement="left" title="Hard"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">front-end</span>
                            </div>
                        </div>
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options5">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options5">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-red" data-toggle="tooltip" data-placement="left" title="Hard"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">front-end</span>
                            </div>
                        </div>
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options6">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options6">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-red" data-toggle="tooltip" data-placement="left" title="Hard"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">front-end</span>
                            </div>
                        </div>
                        <div class="col-sm-12 ql-list-box">
                            <div class="col-sm-12 nopadding mb-10">
                                <h4>Which of the following class applies the hover color to a particular row or cell of a table?</h4>
                                <div class="col-sm-12 collapse" id="ql-options7">
                                    <p>A. Lorem ipsum dolor sit ame</p>
                                    <p>B. consectetur adipiscing elit</p>
                                    <p class="color-green">C. sed do eiusmod tempor incididunt </p>
                                    <p>D. et dolore magna aliqua. Ut enim ad </p>
                                </div>
                                <a class="more-link more-link-change" data-toggle="collapse" href="#ql-options7">more details</a>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <img src="images/verified.png" class="bm-library mt-10" data-toggle="tooltip" data-placement="right" title="By : BM Library" />
                            </div>
                            <div class="col-sm-8 nopadding text-right">
                                <span class="color-red" data-toggle="tooltip" data-placement="left" title="Hard"><i class="fas fa-dot-circle"></i></span>
                                <span class="ql-list-tag">css</span>
                                <span class="ql-list-tag">front-end</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-30">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a href="#" class="d-btn">Load more</a>
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
    <div class="modal fade" id="add-coding" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content add-que-modal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Create Coding question</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal add-que-form">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Question Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control d-form">
                                            <option>Select Question Type</option>
                                            <option>Multiple Choice Question</option>
                                            <option selected>Coding Problem</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs coding-tab-modal" role="tablist">
                                    <li role="presentation" class="active"><a href="#code_step_1" aria-controls="home" role="tab" data-toggle="tab">Problem Details</a></li>
                                    <li role="presentation"><a href="#code_step_2" aria-controls="profile" role="tab" data-toggle="tab">Editor</a></li>
                                    <li role="presentation"><a href="#code_step_3" aria-controls="messages" role="tab" data-toggle="tab">Test Cases</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="code_step_1">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Problem Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control d-form" placeholder="Problem Title" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Problem Statement</label>
                                            <div class="col-sm-10">
                                                <textarea id="qc-title" name="editordata"></textarea>
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
                                            <label class="col-sm-2 control-label">Constraints</label>
                                            <div class="col-sm-10">
                                                <textarea id="qc-constraints" name="editordata"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Editorial</label>
                                            <div class="col-sm-10">
                                                <textarea id="qc-editorial" name="editordata"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contents</label>
                                            <div class="col-sm-10">
                                                <textarea id="qc-contents" name="editordata"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Input Format</label>
                                            <div class="col-sm-10">
                                                <textarea id="qc-input-format" name="editordata"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Output Format</label>
                                            <div class="col-sm-10">
                                                <textarea id="qc-output-format" name="editordata"></textarea>
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
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="code_step_2">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Code Template</label>
                                            <div class="col-sm-10 text-right">
                                                <select class="d-form-sm">
                                                    <option>C</option>
                                                    <option>C++</option>
                                                    <option>C#</option>
                                                    <option>Java</option>
                                                    <option>PHP</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 mt-20">
                                                <textarea class="form-control" placeholder="*Developer : Please replace this with Code Editor" rows="15"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="code_step_3">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upload Test Cases</label>
                                            <div class="col-sm-4">
                                                <span class="btn d-btn btn-file-new">Upload As Zip<input type="file">
                                                </span>
                                                <p class="help-block">File size should be under 2 MB</p>
                                            </div>
                                            <div class="col-sm-5 text-right">
                                                <a href="#" class="d-link"><i class="glyphicon glyphicon-save mr-5"></i>Download Sample File</a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Test Cases</label>
                                            <div class="col-sm-10">
                                                <p>A test case consists of input values to the program and then expected output. Input will be fed to the program’s STDIN and output will be expected in STDOUT</p>
                                                <table class="test-case-tbl table table-bordered table-striped mt-30">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Difficulty</th>
                                                            <th>Score</th>
                                                            <th class="text-center">Edit</th>
                                                            <th class="text-center">Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Test Case Name</td>
                                                            <td>Difficult</td>
                                                            <td>10</td>
                                                            <td class="text-center"><a href="#"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                                            <td class="text-center"><a href="#"><i class="glyphicon glyphicon-trash"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="btn-line" id="text-case-btn"><i class="fas fa-plus mr-5"></i>Add Test Case</a>
                                                <div class="col-sm-12 mt-20" id="text-case-form" style="display: none">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 pad-lr-0 control-label fw-normal">Test Cases Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control white-field" placeholder="Test Case Name" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 pad-lr-0 control-label fw-normal">Diffculty</label>
                                                        <div class="col-sm-5">
                                                            <select class="form-control white-field">
                                                                <option>Select</option>
                                                                <option>Default</option>
                                                                <option>Basic</option>
                                                                <option>Boundary Test Case</option>
                                                                <option>Correctness Test Case</option>
                                                                <option>Complext Test Case</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 pad-lr-0 control-label fw-normal">Score</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control white-field" placeholder="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 pad-lr-0 control-label fw-normal">Input</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control white-field" placeholder="" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 pad-lr-0 control-label fw-normal">Output</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control white-field" placeholder="" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-11 text-right">
                                                        <button type="button" class="btn-line" id="text-case-btn-close">Cancel</button>
                                                        <button type="button" class="btn-fill"><i class="fas fa-plus mr-5"></i>Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-line" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="button" class="btn-fill"><i class="fas fa-plus mr-5"></i>Save Problem</button>
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

        $('#qc-title').summernote({
            placeholder: 'Problem Statement',
            height: 100
        });
        $('#qc-constraints').summernote({
            height: 70
        });
        $('#qc-editorial').summernote({
            height: 70
        });
        $('#qc-contents').summernote({
            height: 70
        });
        $('#qc-input-format').summernote({
            height: 70
        });
        $('#qc-output-format').summernote({
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
        $('.more-link-change').click(function () {
            $(this).text(function (i, old) {
                return old == 'more details' ? 'less details' : 'more details';
            });
        });
        $("#text-case-btn").click(function () {
            $("#text-case-form").toggle();
        });
        $("#text-case-btn-close").click(function () {
            $("#text-case-form").hide(500);
        });
    </script>
@endsection
