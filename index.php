<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Resume Generator</title>
    <style>
        body{
            background-color: #A0E7E5;
        }
        .personal-details,.achivement-details,.primary-education,.higher-education{
            max-height: 50vh;
            overflow: auto;
            background-color: #FFAEBC;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center my-3">Make Your Own Resume</h1>
        <form action="resume.php" class="w-100" method="post" enctype="multipart/form-data">
            <div class="row">
                <!-- -----------------------------------------Personal Details--------------------------------------------------- -->
                <div class="col-md-6 personal-details shadow-sm ">
                    <fieldset>
                        <legend>Personal Info</legend>
                        <div class="form-group">
                            <label for="name">Enter Your Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="img">Upload Your Image</label>
                            <input type="file" class="form-control" id="img" name="img" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Enter Your Mobile No.</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin Profile link</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="github">Github Profile link</label>
                            <input type="text" class="form-control" id="github" name="github">
                        </div>
                        <div class="form-group">
                            <label for="about">About Your Self</label>
                            <textarea class="form-control" id="about" name="about" rows="3" placeholder="within 50 words"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hobby">Add Your Hobbies</label>
                            <textarea class="form-control" id="hobby" name="hobby" rows="3" placeholder="Minimum 3 hobbies required"></textarea>
                        </div>
                    </fieldset>
                </div>
                <!-- ------------------------------------------------ Skill & Achivements----------------------------------------- -->
                <div class="col-md-6 achivement-details shadow-sm">
                    <fieldset>
                        <legend>Skill & Achivements</legend>
                        <!-- ----------------------------------skills------------------------------- -->
                        <button class="btn btn-primary btn-block my-4" id="addskill" >Add Skill</button>
                        <div class="skills">
                            <div class="form-group">
                                <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control skill" name="skills[]">
                                        <small class="form-text text-muted">Enter Your Skill</small>
                                   </div>
                                   <div class="col-md-4">
                                        <input type="number" class="form-control skillacc" name="skillacc[]">
                                        <small class="form-text text-muted">Skill Accuracy</small>
                                   </div>
                                   <div class="col-md-2 p-md-0 pt-2 d-md-block d-flex justify-content-end">
                                        <button class="btn btn-danger rmvskill">remove</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- -----------------------------------Experiences---------------------------- -->
                        <button class="btn btn-primary btn-block my-4" id="addexp" >Add Work Experience</button>
                        <div class="exps">
                            <div class="form-group">
                                <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control exp" name="exps[]">
                                        <small class="form-text text-muted">Enter Your Work Experience</small>
                                   </div>
                                   <div class="col-md-4">
                                        <input type="number" class="form-control exptime" name="expstime[]" >
                                        <small class="form-text text-muted">Year of Experience</small>
                                   </div>
                                   <div class="col-md-2 p-md-0 pt-2 d-md-block d-flex justify-content-end">
                                        <button class="btn btn-danger rmvexp">remove</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------Projects----------------------------- -->
                        <button class="btn btn-primary btn-block my-4" id="addproj" >Add Your Projects</button>
                        <div class="projects">
                            <div class="form-group">
                                <div class="row">
                                   <div class="col-md-4">
                                        <input type="text" class="form-control proj" name="proj[]">
                                        <small class="form-text text-muted">Enter Your Project Title</small>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control projlink" name="projlinks[]" >
                                        <small class="form-text text-muted">Enter Project github link</small>
                                   </div>
                                   <div class="col-md-10">
                                        <textarea class="form-control" name="projdetails[]" rows="2" placeholder="Add Project Details"></textarea>
                                   </div>
                                   <div class="col-md-2 p-md-0 pt-2 d-md-block d-flex justify-content-end">
                                        <button class="btn btn-danger rmvproj">remove</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- ------------------------------------------------------Educational Details-------------------------------------- -->
            <div class="row mt-3">
                <div class="col">
                    <fieldset>
                        <legend>Educatinal Details</legend>
                        <div class="row">
                            <div class="col-md-6 primary-education shadow-sm">
                                <fieldset>
                                    <legend>X-th level</legend>
                                    <div class="form-group">
                                        <label for="xinst">Institute Name</label>
                                        <input type="text" class="form-control" id="xinst" name="xinst">
                                    </div>
                                    <div class="form-group">
                                        <label for="xboard">Education Board</label>
                                        <input type="text" class="form-control" id="xboard" name="xboard">
                                    </div>
                                    <div class="form-group">
                                        <label for="xpass">Year of Passing</label>
                                        <input type="date" class="form-control" id="xpass" name="xpass">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>XII-th level</legend>
                                    <div class="form-group">
                                        <label for="xiiinst">Institute Name</label>
                                        <input type="text" class="form-control" id="xiiinst" name="xiiinst">
                                    </div>
                                    <div class="form-group">
                                        <label for="xiiboard">Education Board</label>
                                        <input type="text" class="form-control" id="xiiboard" name="xiiboard">
                                    </div>
                                    <div class="form-group">
                                        <label for="xiipass">Year of Passing</label>
                                        <input type="date" class="form-control" id="xiipass" name="xiipass">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6 higher-education shadow-sm">
                                <fieldset>
                                    <legend>Higher Education</legend>
                                    <button class="btn btn-primary btn-block my-3 addhighedu">Add Higher Education</button>
                                    <div class="higherstudy">
                                        <div class="degree">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="highins[]" placeholder="Institute Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="highcourse[]" placeholder="Course Name">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="univ[]" placeholder="university Name">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" name="degree[]" placeholder="ug/pg/diploma">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="date" class="form-control" name="highstart[]">
                                                        <small class="form-text text-muted">Form</small>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="date" class="form-control" name="highend[]">
                                                        <small class="form-text text-muted">To</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-end">
                                                <button class="btn btn-danger rmvhe">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row justify-content-end">
                <button type="reset"class="btn btn-primary my-3 mr-3" name="reset">Reset</button>
                <button type="Submit"class="btn btn-primary my-3 mr-3" name="submit">Submit</button>
            </div>
        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#addskill').on('click',function(e){
                e.preventDefault();
                $('.skills').append(`<div class="form-group">
                                <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control skill" name="skills[]">
                                        <small class="form-text text-muted">Enter Your Skill</small>
                                   </div>
                                   <div class="col-md-4">
                                        <input type="number" class="form-control skillacc" name="skillacc[]">
                                        <small class="form-text text-muted">Skill Accuracy</small>
                                   </div>
                                   <div class="col-md-2 p-md-0 pt-2 d-md-block d-flex justify-content-end">
                                        <button class="btn btn-danger rmvskill">remove</button>
                                   </div>
                                </div>
                            </div>`);
            });
            $(document).on('click','.rmvskill',function(e){
                e.preventDefault();
                $(this).parent().parent().parent().remove();
            });
            // -----------------------------------Experiences--------------------------
            $('#addexp').on('click',function(e){
                e.preventDefault();
                $('.exps').append(`<div class="form-group">
                                <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control exp" name="exps[]">
                                        <small class="form-text text-muted">Enter Your Work Experience</small>
                                   </div>
                                   <div class="col-md-4">
                                        <input type="number" class="form-control exptime" name="expstime[]" >
                                        <small class="form-text text-muted">Year of Experience</small>
                                   </div>
                                   <div class="col-md-2 p-md-0 pt-2 d-md-block d-flex justify-content-end">
                                        <button class="btn btn-danger rmvexp">remove</button>
                                   </div>
                                </div>
                            </div>`);
            });
            $(document).on('click','.rmvexp',function(e){
                e.preventDefault();
                $(this).parent().parent().parent().remove();
            });
            // -------------------------------Projects-------------------------------------
            $('#addproj').on('click',function(e){
                e.preventDefault();
                $('.projects').append(`<div class="form-group">
                                <div class="row">
                                   <div class="col-md-4">
                                        <input type="text" class="form-control proj" name="proj[]">
                                        <small class="form-text text-muted">Enter Your Project Title</small>
                                   </div>
                                   <div class="col-md-8">
                                        <input type="text" class="form-control projlink" name="projlinks[]" >
                                        <small class="form-text text-muted">Enter Project github link</small>
                                   </div>
                                   <div class="col-md-10">
                                        <textarea class="form-control" name="projdetails[]" rows="2" placeholder="Add Project Details"></textarea>
                                   </div>
                                   <div class="col-md-2 p-md-0 pt-2 d-md-block d-flex justify-content-end">
                                        <button class="btn btn-danger rmvproj">remove</button>
                                   </div>
                                </div>
                            </div>`);
            });
            $(document).on('click','.rmvproj',function(e){
                e.preventDefault();
                $(this).parent().parent().parent().remove();
            });
            // -------------------------------------Add Higher Education-------------------------------
            $('.addhighedu').on('click',function(e){
                e.preventDefault();
                $('.higherstudy').append(`<div class="degree">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="highins[]" placeholder="Institute Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="highcourse[]" placeholder="Course Name">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="univ[]" placeholder="university Name">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" name="degree[]" placeholder="ug/pg/diploma">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="date" class="form-control" name="highstart[]">
                                                        <small class="form-text text-muted">Form</small>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="date" class="form-control" name="highend[]">
                                                        <small class="form-text text-muted">To</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-end">
                                                <button class="btn btn-danger rmvhe">Remove</button>
                                            </div>
                                        </div>`);
            });
            $(document).on('click','.rmvhe',function(e){
                e.preventDefault();
                $(this).parent().parent().remove();
            });

        });
    </script>

</body>
</html>