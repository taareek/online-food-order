<?php include('partials/menu.php'); ?>
 
        <!-- contact section starts  -->

        <section id="contact">
          <div class= "contact wrapper">
            <div class= "container">
              <div class= "row">
                <div class="col-sm-12">
                  <div class= "text-content text-center pb-4">
                    <h2>I am Home  !</h2>
                    <br>
                    <?php
                        if(isset($_SESSION['login'])){
                            echo $_SESSION['login'];
                            unset ($_SESSION['login']);
                        }
                    ?>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
<?php include('partials/footer.php'); ?>