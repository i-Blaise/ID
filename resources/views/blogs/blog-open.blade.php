<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Blogs Page</title>
    <!-- Include the stylesheet -->

        <!-- Favicon  -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon_io/site.webmanifest">

        
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
            <!-- navbar begins here -->

            @include('components.navbar')
    

    <section id="blog-content-container">

      
      <img src="assets/blog-blob2.svg" alt="" class="blob2">
      <img src="assets/blog-blob3.svg" alt="" class="blob3">
      <div class="blog-content-left">
        <div class="main-blog-image">
          <img src="assets/blog-open-img.png" alt="">
        </div>
        <div class="main-content-container">
          <h1>You can now listen to the entire library of Design Better books for free</h1>
          <div class="main-blog-details">
            <img src="assets/home-blog-author1.png" alt="" class="author-img">
            <h5 class="author-name">Robin Robert</h5>
            <p class="blog-date">Mar 01, 2024 &nbsp; &nbsp;<img src="assets/red-dot.svg" alt="">3 mins read</p>
          </div>

          <p class="main-body-1">dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodomolestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan eiusto odio dignissim qui blandit praesent luptatum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet .<br><br>

            legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. <br><br>
            
            mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

            <div class="body-image-row">
              <img src="assets/body-image1.png" alt="" class="body-image1">
              <img src="assets/body-image2.png" alt="" class="body-image2">
            </div>

            <h1>Habitasse per feugiat aliquam luctus
            </h1>
            <p class="main-body-2">
              dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodomolestie consequat, vel illum dolore eu feugiat <br> <br>

              legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
            </p>


            <div class="blog-content-3">
              <h1>Habitasse per feugiat aliquam luctus
              </h1>
              <p class="main-body-3">
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodomolestie consequat, vel illum dolore eu feugiat <br> <br>
  
                legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
              </p>
            </div>



            <div class="blog-content-quote">
              <div class="quote-content">
                <p class="quotation">“</p>
                <p>dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                <p class="quote-by">By Robin Roberts</p>
              </div>
            </div>

            <p class="main-body-4">legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>



            <div class="share-row">
              <img src="{{ asset('assets/three-dots.svg') }}" class="three-dots" alt="">
              <h4>Share</h4>
              <div class="share-socials">
                <img src="assets/fb-black.svg" alt="">
                <img src="assets/x-black.svg" alt="">
                <img src="assets/in-black.svg" alt="">
                <img src="assets/ig-black.svg" alt="">
              </div>
            </div>


            <div class="blog-comment">
              <h1>Leave A Comment</h1>
              <form action="">
                <div class="input-row">
                  <div class="input-field">
                    <label for="fname">First name *</label><br>
                    <input type="text" name="fullname" placeholder="John Doe">
                  </div>

                  <div class="input-field">
                    <label for="fname">Your email</label><br>
                    <input type="text" name="fullname" placeholder="email@yourdomain.com">
                  </div>
                </div>

                <div class="input-row">
                  <div class="input-field">
                    <label for="fname">Website *</label><br>
                    <input type="text" name="fullname" class="long-input" placeholder="Your website address here">
                  </div>
                </div>


                <div class="input-row">
                  <div class="input-field">
                    <label for="fname">Message *</label><br>
                    <textarea type="text" name="fullname" class="long-textarea" placeholder="Full name">Hello, I would like to talk to you about...
                    </textarea>
                  </div>
                </div>
                  
                <input type="checkbox" id="save-data" name="save-data" value="save-data">
                <label for="save-data" class="save-data">
                  Save my name, email, and website in this browser for the next time I comment.</label><br>


                  <input type="submit" value="Post Comment">
              </form>
            </div>

        </div>
      </div>





      <img src="assets/blog-blob1.svg" alt="" class="blob1">
      <div class="blog-content-right">
        <form action="#" class="search-bar">
          <input type="text" name="fullname" placeholder="Search...">
        </form>
        <div class="recent-post-container">
          <h1>Recent Posts</h1>

          <div class="recent-post-card">
            <div class="recent-post-image">
              <img src="assets/recentpost-blog1.png" alt="">
            </div>
            <div class="recent-post-details">
              <h1>How to Increase Your ROI
                Through scientific</h1>
                <p>May 02, 2022 &nbsp; <img src="assets/blue-dot.svg" alt=""> 3 min read</p>
            </div>
          </div>
          
          <div class="recent-post-card">
            <div class="recent-post-image">
              <img src="assets/recentpost-blog2.png" alt="">
            </div>
            <div class="recent-post-details">
              <h1>How to Increase Your ROI
                Through scientific</h1>
                <p>May 02, 2022 &nbsp; <img src="assets/blue-dot.svg" alt=""> 3 min read</p>
            </div>
          </div>
          
          <div class="recent-post-card">
            <div class="recent-post-image">
              <img src="assets/recentpost-blog3.png" alt="">
            </div>
            <div class="recent-post-details">
              <h1>How to Increase Your ROI
                Through scientific</h1>
                <p>May 02, 2022 &nbsp; <img src="assets/blue-dot.svg" alt=""> 3 min read</p>
            </div>
          </div>

          <div class="recent-post-card">
            <div class="recent-post-image">
              <img src="assets/recentpost-blog4.png" alt="">
            </div>
            <div class="recent-post-details">
              <h1>How to Increase Your ROI
                Through scientific</h1>
                <p>May 02, 2022 &nbsp; <img src="assets/blue-dot.svg" alt=""> 3 min read</p>
            </div>
          </div>

        </div>


        <div class="blog-category-container">
          <h1>Categories</h1>
          <div class="category-card">
            <p class="category">Design News</p>
            <p class="number">(1)</p>
          </div>
          <div class="category-card">
            <p class="category">Information Technology</p>
            <p class="number">(2)</p>
          </div>
          <div class="category-card">
            <p class="category">New Concepts News</p>
            <p class="number">(1)</p>
          </div>
        </div>



        <div class="blog-social-media">
          <div class="social-icons">
            <p>Follow: </p>
            <p><a href=""><img src="assets/fb.svg" alt=""></a></p>
            <p><a href=""><img src="assets/x.svg" alt=""></a></p>
            <p><a href=""><img src="assets/in.svg" alt=""></a></p>
            <p><a href=""><img src="assets/ig.svg" alt=""></a></p>
          </div>
        </div>


        <div class="blog-content-tags">
          <h1>Tags</h1>
          <div class="tag-container">
            <a href=""><div class="tag">Design</div></a>
            <a href=""><div class="tag">Development</div></a>
            <a href=""><div class="tag">HTML</div></a>
            <a href=""><div class="tag">Animation</div></a>
            <a href=""><div class="tag">Life Stlye</div></a>
            <a href=""><div class="tag">Dashboard</div></a>
            <a href=""><div class="tag">Template</div></a>
          </div>
        </div>
      </div>
    </section>













    <div class="pagination-section">
      <div class="page-numbers">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a href="#">8</a>
        <a href="#">9</a>
        <a href="#">10</a>
      </div>
    </div>


    <!-- Footer Starts  -->
        @include('components.footer')
    <!-- Footer Ends  -->
    

    <script> 
  
      // Targeting video element  
      let clip = document.querySelector(".vid") 
      let footer = document.querySelector(".footer-row") 

      /* Applying mouseover event on video clip  
      and then we call play() function to play  
      the video when the mouse is over the video */ 
      footer.addEventListener("mouseover", function (e) { 
          clip.play(); 
      }) 

      /* Applying mouseout event on video clip  
      and then we call pause() function to stop  
      the video when the mouse is out the video */ 
      footer.addEventListener("mouseout", function (e) { 
          clip.pause(); 
      }) 
  </script> 

  </body>
  </html>