<form class="form" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label">Title</label>
                                                        <select name="title" id="title" data-placeholder="Title">
                                                            <option value="">Title</option>
                                                            <option value="1" selected>Mrs</option>
                                                            <option value="2">Mr</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Your Name</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="Jane Doe" required>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                            </div>
                                            <!--end row-->
                                            <div class="form-group">
                                                <label for="location" class="col-form-label required"></label>
                                                <input name="location" type="text" class="form-control" id="input-location2" placeholder="Your Location" value="<?php echo $row['location']?>" required>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="about" class="col-form-label">More About You</label>
                                                <textarea name="about" id="about" class="form-control" rows="4"><?php echo $row['about']?></textarea>
                                            </div>
                                            <!--end form-group-->
                                        </section>

                                        <section>
                                            <h2>Contact</h2>
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label">Phone</label>
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" value="<?php echo $row['phone']?>">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="<?php echo $row['email']?>">
                                            </div>
                                            <!--end form-group-->
                                        </section>

                                        

                                        <section class="clearfix">
                                            <button type="submit" name="submit" class="btn btn-primary float-right">Save Changes</button>
                                        </section>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="profile-image">
                                            <div class="image background-image">
                                                <img src="<?php echo $row['picture'];?>" alt="">
                                            </div>
                                            <div class="single-file-input">
                                                <input type="file" id="user_image" name="user_image">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                            </form>