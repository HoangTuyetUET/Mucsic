<!DOCTYPE html>
<html lang="en">
<head>

  <title>MusicYukiko</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/readmore.js"></script>
  <script src="js/loibaihat.js"></script>
    <script src="js/videoplayer.js"></script>
  
  

  

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <ul class="nav navbar-nav navbar-left">
        <li><a href="#myPage">MusicYukiko</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">Home</a></li>
        <li><a href="#music">Music</a></li>
        <li><a href="#video">Video</a></li>
        <li><a href="#Blog">Blog</a></li>
        <li><div class="search">
    <input type="text" name="timkiem" placeholder="Tìm kiếm ...">
  </div></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/casi1.jpg" alt="New York" width="100%" height="100">
        <div class="carousel-caption">
          <h3>KATY PERRY Katheryn Elizabeth Hudson </h3>
          <p>được biết đến nhiều hơn với biệt danh Katy Perry, là một ca sĩ - nhạc sĩ người Mỹ..</p>
        </div>
      </div>

      <div class="item">
        <img src="image/casi2.jpg" alt="Chicago" width="100%" height="100">
        <div class="carousel-caption">
          <h3>Yêu - Mr. Siro</h3>
          <p>Bao năm gần nhau ta vẫn nồng nàn
Tim yêu lại một đêm thắp sáng
Cho đêm nồng thêm ngập tràn bao ấm áp</p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/casi3.jpg" alt="Los Angeles" width="100%" height="100">
        <div class="carousel-caption">
          <h3>TAYLOR SWIFT Taylor Alison Swift</h3>
          <p> là một ca sĩ, nhạc sĩ, diễn viên âm nhạc người Mỹ. Trong năm 2008, những album của cô đã bán được tổng cộng 11 triệu bản riêng tại Mĩ theo Billboard, và 13 triệu bản trên toàn thế giới....</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- player -->

<div id="music" class="container">
<h3 class="text-center">--Music--</h3>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <div id="nowPlay">
                <span class="Left" id="imagemusic"></span>
                <span class="right" id="npTitle"></span>
            </div>
       <audio src="" controls id="audioPlayer"></audio>
      <span id="loibaihat">
        Bài hát: Give Up – Birdy <br/> <br/>I find myself in these four walls <br/>Wishing for somewhere else <br/>I've lost myself like this before <br/> Calling out for your help <br/> <br/> All the times I won't believe <br/> Yours will be the voice that is on my shoulder <br/> All the things you've said to me <br/> Written on my heart every word you've spoken <br/> <br/> I know you, you'll never give up on me, give up on me <br/> If always I'll <br/> let you give up on me, give up on me <br/> Oh, when I'm out of place, when I'm losing faith <br/> You\'re the one that never lefts me wrong <br/>Yo'll never give up on me, give up on me, give up on me <br/> <br/>Inside my head I've been at war <br/> Trying to find some peace <br/> If you can\'t see an open door <br/> Teach me how to be free 
      </span>
    </div>
    <div class="col-xs-6 col-md-4">
    <ul id="playlist" class="text-right">
        <li><h4>Danh sách bài hát</h4></li>
        <li id="current-song" onclick="loi('Bài hát: Give Up – Birdy <br/> <br/>I find myself in these four walls <br/>Wishing for somewhere else <br/>I\'ve lost myself like this before <br/> Calling out for your help <br/> <br/> All the times I won\'t believe <br/> Yours will be the voice that is on my shoulder <br/> All the things you\'ve said to me <br/> Written on my heart every word you\'ve spoken <br/> <br/> I know you, you\'ll never give up on me, give up on me <br/> If always I\'ll <br/> let you give up on me, give up on me <br/> Oh, when I\'m out of place, when I\'m losing faith <br/> You\'re the one that never lefts me wrong <br/>Yo\'ll never give up on me, give up on me, give up on me <br/> <br/>Inside my head I\'ve been at war <br/> Trying to find some peace <br/> If you can\'t see an open door <br/> Teach me how to be free ','Give Up - Birdy')"><a href="music/Give Up - Birdy.mp3">1.Give Up - Birdy</a></li>
        <li onclick="loi('Bài hát: Beautiful Birds - Passenger, Birdy  <br/> <br/>You remember when we were two beautiful birds, we would light up the sky, when we\’d fly, <br/>You were orange and red, like the sun when it sets, I was green as an apple\’s eye. <br/> <br/> You said you loved all the songs that I\'d sing, but nothing like you’d ever heard, <br/> And I said I loved you with all of my heart when we were two beautiful birds. <br/> <br/> Remember when we were two beautiful birds, we would say when the morning would come, <br/> You are silver and blue like the moon when it’s new, I was gold as the summer sun. <br/> <br/> But one day you asked for a different song, <br/> One that I just couldn\’t sing, <br/> I got the melody sharp, and the words all wrong, <br/> Those were the last days of spring. <br/> <br/> To build a nest we pecked feathers from our chests, <br/> Like a book tearing out every page, <br/> We weren’t to know that <br/> these feathers would grow, <br/> Into a beautiful cage.','Beautiful Birds - Passenger Birdy')"><a href="music/Beautiful Birds - Passenger Birdy.mp3">2.Beautiful Birds - Passenger Birdy</a></li>
        <li onclick="loi('Bài hát: Gửi Anh Xa Nhớ - Bích Phương <br/> <br/>Anh xa nhớ anh có khỏe không <br/>Em lâu lắm không viết thư tay <br/>Đầu thư em chẳng biết nói gì <br/>Ngoài câu em ở đây nhớ anh vơi đầy <br/>Anh hãy cứ yên tâm công tác <br/>Em da diết thủy chung một lòng <br/>Ngày em nghĩ về anh thật nhiều <br/>Để đêm đêm nằm mơ về anh <br/>Chorus: <br/>Anh đi hoài đường xa <br/>Em vẫn chờ nơi ấy <br/>Em yêu lắm đấy <br/>Em thương lắm đấy <br/>Em lo cho a nhiều đấy <br/>Mong đến ngày gặp nhau <br/>Dẫu cách trở bao lâu <br/>Mua bao thuốc lá, mua *** gói bánh <br/>Anh sang thưa chuyện cùng em nghe anh','Gửi Anh Xa Nhớ - Bích Phương')"><a href="music/GuiAnhXaNho-BichPhuong-4539289.mp3">3.Gửi Anh Xa Nhớ - Bích Phương</a></li>
        <li><a href="music/Beating Heart - Birdy.mp3">4.Góc Ban Công-Vũ Cát Tường</a></li>
        <li><a href="music/Beating Heart - Birdy.mp3">5.Yêu Một Người Vô Tâm -Bảo Anh</a></li>

    </ul>
    </div>

    <script src="js/audioPlayer.js"></script>
    <script>
        // loads the audio player
        audioPlayer();
    </script>
   
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="video" class="bg-1 container">
  <h3 class="text-center">--Video--</h3>
  <div class="row">
  
   <div class="col-xs-6 col-md-4">
    <ul id="playlist1">
    <h4>Danh sách video</h4>
    <li  onclick="tieudevideo('Gửi Anh Xa Nhớ - Bích Phương')" movieurl="video/Gửi Anh Xa Nhớ.mp4" moviesposter="image/video1.jpg">Gửi Anh Xa Nhớ - Bích Phương</li>
     <li  onclick="tieudevideo('Hà Anh Tuấn - Tháng Tư Là Lời Nói Dối Của Em (Official MV)')" movieurl="video/video2.mp4">Hà Anh Tuấn - Tháng Tư Là Lời Nói Dối Của Em (Official MV)</li>          
    <li  onclick="tieudevideo('Mình là gì của nhau - Lou Hoàng - Official MV 4K - Nhạc trẻ hay mới nhất')" movieurl="video/video3.mp4">Mình là gì của nhau - Lou Hoàng - Official MV 4K - Nhạc trẻ hay mới nhất</li>    
    <li  onclick="tieudevideo('PHÍA SAU MỘT CÔ GÁI - Soobin Hoàng Sơn ( OFFICIAL Lyric Video )')" movieurl="video/video4.mp4">PHÍA SAU MỘT CÔ GÁI - Soobin Hoàng Sơn ( OFFICIAL Lyric Video )</li>
  </ul>
  </div>
   <div class="col-xs-12 col-md-8">
    <video id="videoarea" controls="controls" poster="" src=""></video>
    <span id="titlevideo" > Gửi Anh Xa Nhớ - Bích Phương</span>
    </div>

  </div>
</div>

<!-- Container (Contact Section) -->
<div id="Blog" class="container">
  <h3 class="text-center">--Blog--</h3>
  <p class="text-center"><em>Nơi bày tỏ tâm sự !</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Liên hê</p>
      <p><image src="image/home_address-icon.png"></image> Hà Nội, Việt Nam</p>
      <p><image src="image/icon-iphone.png"></image> Điện thoại: 01699961***</p>
      <p><image src="image/email.png"></image> Email: snowhoang2002@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Bí danh/ Tiêu đề" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Bày tỏ" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <span id="thongbao"></span>
          <button class="btn pull-right" type="submit">Gửi</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">Blog Hay</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Dâu tây</a></li>
    <li><a data-toggle="tab" href="#menu1">Xu Kem</a></li>
    <li><a data-toggle="tab" href="#menu2">Lỳ</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>SỰ ỔN ĐỊNH CÓ ĐỒNG NGHĨA VỚI HẠNH PHÚC?</h2>
      <p>"Hầu hết chúng ta đều chết ở tuổi 25, những năm tháng sau đó chỉ là tồn tại"<br/>

Tối hôm qua đang miệt mài ngồi ăn gà rán để giảm cân thì con bạn ở VN bị mất ngủ inbox rên rỉ, ỉ ôi.<br/>

Nó 24 tuổi (cả mụ là 25),cũng ưa nhìn, học hành đàng hoàng, vừa mất việc và người yêu sắp đi du học. Nó tự đặt tên cho cơn khủng hoảng của mình bằng 3 từ mơ hồ "chưa ổn định". Tôi hỏi nó: "thế theo mày thế nào được gọi là ổn định?". Nó bảo tức là giống như mấy đứa bạn thân của nó: có công ăn việc làm, được vào biên chế, thu nhập đều đặn; lấy một anh chồng cũng có các mục trên (nếu ko là viên chức thì cũng là kinh doanh buôn bán phát đạt). Và thế là nó phát rồ lên vì thấy mình kém cỏi, thấy mình bị chậm trễ, thấy mình lông bông. Mắc mệt!<br/>

Tôi đành nghỉ giữa hiệp cánh gà bằng một ngụm coca để ngồi viết văn tế, à nhầm viết text trả lời nó: thế mày nghĩ sự ổn định đồng nghĩa với hạnh phúc à?</p>
  <p class="text-right">Dâu tây</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>NỖI CÔ ĐƠN TRẢI DÀI</h2>
      <p>Sự cô đơn khi không có một ai bên cạnh bạn không phải là cái cảm giác cô đơn nhất, mà cô đơn thật sự là khi bạn ở xung quanh rất nhiều người mà không một ai hiểu được bạn.<br/>
Nỗi cô đơn của một đứa trẻ:<br/>

Một đứa con gái không có mẹ có lẽ là nỗi đau lớn nhất trong suốt cả tuổi thơ của nó. Ngay từ khi còn rất bé nó đã không thể cảm nhận được hơi ấm của mẹ. Không có ai chải tóc cho, không có mẹ nên nó cũng chưa một lần được tết tóc đuôi Sam. Cứ mỗi khi nhìn thấy một người bạn trong lớp có một mái tóc được mẹ chải chuốt hay tết bím nó lại như muốn khóc. Mà nước mắt cũng chẳng thể rơi nổi nữa.<br/>

Mỗi khi buồn nó vẫn thường nói chuyện một mình: hôm nay mình làm gì nào, trên lớp hôm nay có bạn này, có bạn kia đạt điểm cao, bài văn của mình hôm nay vẫn chưa được điểm tốt... Khi cảm thấy cô đơn vì không có một ai bên cạnh mình nó vẫn tự lấy tay phải nắm chặt lấy tay trái của mình và rồi ngồi cười thật ngốc ngếch rằng mình không hề cô độc, vẫn đang có một bàn tay nắm lấy tay mình. Khi tủi thân muốn khóc nó vẫn thường hay tự nhủ với lòng mình rằng: mình sẽ không sao cả, mình sẽ mạnh mẽ hơn, mình sẽ làm được thôi, một chút và một chút ấy thôi nhưng có lẽ rằng nó đã phải cố gắng rất nhiều. Từ lúc còn rất nhỏ nó đã học cách tồn tại thật mạnh mẽ, tồn tại trong cuộc sống đó là điều nó có thể làm được.</p>
     <p class="text-right">Xu Kem</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>FAN CUỒNG THẦN TƯỢNG</h2>
      <p>Người điêu khắc cứ tỉ mỉ khắc chạm từng pho tượng, từng phiến đá và dần tạo thành hình. Ông nói: ''Trong trái tim mỗi người luôn ấp ủ một tượng thần''. Chắc hẳn trong mỗi chúng ta đều có một thần tượng, một ngưỡng vọng, một con người để noi theo. Nhưng nếu sự ngưỡng mộ quá giới hạn thì nó sẽ trở thành một hồi chuông cảnh tỉnh ''Fan cuồng thần tượng''.<br/>Người ta đi khắp thế giới để ngắm nhìn những khung cảnh đẹp, những phong tục tập quán hay. Người ta gặp nhiều người & không khỏi dành cho ai đó một sự kính trọng, ngưỡng mộ đặc biệt. Ấy là thần tượng của chúng ta. Ta sẽ xem người đó là mục tiêu, là tấm gương để noi theo, ta sẽ thuộc lời bài hát, sưu tầm những hình ảnh, bài hát trong quyển sổ hay cuốn vở nào đó để lưu niệm (bao gồm các lĩnh vực về âm nhạc, thiết kế, điện ảnh) .Thế nhưng nếu chúng ta biểu lộ quá ngưỡng cửa đó, chúng ta sẽ đi khỏi sự ngưỡng mộ đẹp đẽ đó mà lấn sang sự mê cuồng thái quá '' Ngưỡng mộ thần tượng là nét đẹp văn hóa nhưng mê muội thần tượng là một thảm họa''<br/>

Có thể thấy bao nhiêu sự lố lăng trong việc mê muội thần tượng của giới trẻ hiện nay. Không lạ gì một thanh niên nhuộm màu xanh- đỏ- tím.. để giống thần tượng . Không lạ gì một bạn trẻ dán kín bốn bức tường phòng mình bằng những tấm ảnh của thần tượng & hơn thế nữa là khi ngủ họ ôm những tấm ảnh thần tượng để ngủ cùng. Có những bạn trẻ nhớ cả những ngày tháng năm sinh của thần tượng mình mà khi hỏi ngày sinh của ba mẹ mình thì họ lại không nhớ. Hay chỉ vì muốn xem thần tượng trình diễn những show văn nghệ họ đến ngay nơi đó, nghỉ tại đó để được ngắm thần tượng. Đáng lo nhất là tình trạng giành đến mức không còn biết trước sau chỉ mong được bắt tay với thần tượng dù chỉ một lần. Đó là thực trạng đã diễn ra khi nhóm nhạc Hàn Quốc sang nước ta công diễn. Tôi kinh ngạc khi bạn trẻ phát cuồng đến mức '' hôn ghế thần tượng'' , tôi không khỏi bức xúc khi giới trẻ khóc lóc với ba mẹ , đòi bỏ học nếu'' không mua được vé thần tượng biểu diễn''</p>
       <p class="text-right">FAN CUỒNG THẦN TƯỢNG</p>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Lên đầu">
    <image src="image/len.png"></image>
  </a><br><br>
  <p>Copyright@2016 by SnowHoang.**MusicYukiko**.</a></p>
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>

