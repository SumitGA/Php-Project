<?php
require_once('includes/header.php'); 
?>
<body>
<!-- top navigation -->
<?php require_once('includes/topnav.php'); ?>
<!-- ####################################################################################################### -->
<!-- navigations -->


<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.php"><a href="#"><img src="images/logow.gif" alt="Orchid International College" /></a></h1>
      
    </div>
    </div>
    </div>


    <div id="menu">
      <ul>
        <li ><a href="index.php">Home</a></li>
        <li><a href="#">Program</a>
          <ul>
          <li><a href="bim.php">BIM</a></li>
          <li><a href="index.php">BSW</a></li>
          <li><a href="bsccsit.php">Bsc. CSIT</a></li>
          
          </ul>
        </li>
        
        <li><a href="gallery.php">Gallery</a> </li>
        <li><a href="contact.php">Contact</a></li> 
        
      <li class="last"><a href="upload_notes.php">Upload Notes</a>
      </ul>
    </div>
    <br class="clear" />
     </div>
    </div>



          




<!--####################################################################################################### -->
<!-- Slider menu -->

<?php require_once('includes/slider.php'); ?>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <ul>
          <li>
            <h2>About us</h2>
            <div class="imgholder"><img src="images/demo/orchid.jpg" alt="" /></div>
            <p>Orchid International College affiliated to Tribhuvan University, 
              is established in 2010 AD and is promoted by a group of experienced and
               dedicated academicians, computer engineers, management professionals and
                reputed software company of Nepal. The goal of the college is to provide 
                a high quality education that will enable the students to embrace the 
                challenges of the modern world and to establish the foundation for a
                 successful future. College focuses much on management and 
                 information technology in its academic voyage along with main 
                 essentials of capacity building such as experimental and experiential 
                 learning; rigorous need based training, practicum and case diagnosis. 
                 The heart of OIC's educational excellence is the strong network of IT expert, 
                 reputed management professionals, collaboration with branded business houses, 
                 highly qualified and experienced faculty members and caring administrative staffs.</p>
            </p>
          </li>
          <li class="last">
            <h2>Mission</h2>
            <div class="imgholder"><img src="images/demo/orchid.jpg" alt="" /></div>
             <p>Orchid International College  has as its highest priority on student learning and achievement. As Orchid International College prepares world class citizens of the twenty-first century, we recognize that the aim of education is the development of the whole person, who is prepared to be an active citizen and to participate in a global community.
Students are focused to think critically and creatively, and learn to develop effective communication and argumentation skills. Passions are ignited and they learn to draw new connections, share experiences, and become responsible citizens.
.</p>
            </p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div class="column2">
        <h2>Student's feedback!</h2>
        <img class="imgl" src="images/demo/imgl.gif" alt="" />
        

        <p>OIC is a good platform to achevive our dream.All the teaching staff and students are good.</p>
      </div>
    </div>
    <?php require_once('includes/notice.php'); ?>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- Footers -->
<?php require_once('includes/footer.php'); ?>
</body>
</html>