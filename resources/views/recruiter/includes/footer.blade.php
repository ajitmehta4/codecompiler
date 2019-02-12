<div class="footer">
        <div class="container">
            <div class="col-sm-6">
                <p>&copy; 2019 Brainmeasures</p>
            </div>
            <div class="col-sm-6 text-right">
                <a href="#">About us</a>
                <a href="#">API</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms Of use</a>
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
                                    <label for="exampleInputEmail1">What role is this test for?</label>
                                    <select class="welcome-skils" name="states[]">
                                        <option>Software Developer</option>
                                        <option>Full stack Developer</option>
                                        <option>Front-end Developer</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 welcome-skils-main">
                                    <label for="exampleInputEmail1">Work Experience</label>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    @section('assetjs')
    <script>
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
        //Start Welcome select box
        $("#box-1").click(function () {
            $("#box-1").addClass("active");
        });
        $("#box-2").click(function () {
            $("#box-2").addClass("active");
        });
        $("#box-3").click(function () {
            $("#box-3").addClass("active");
        });
        $("#box-4").click(function () {
            $("#box-4").addClass("active");
        });
        // End Welcome select box

        // Multi select skill
        $(document).ready(function () {
            $('.welcome-skils').select2();
        });

        $(document).ready(function () {
            $('.dropdown-submenu a.test').on("click", function (e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
    @endsection