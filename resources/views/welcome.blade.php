@extends('layouts.apps')

@section('content')

<img src="images/Logo.png" data-aos="zoom-in-down" alt="Semeru-Trip Logo" class="Logo">
    <script type="text/javascript">
          AOS.init({
                duration: 2000,
            })
    </script>

<div class="subtitle" data-aos="fade-right">
  Welcome To The Highest Mountain In JAVA
</div>
@endsection

@section('subcontent')

<div class="title" id="Home" data-aos= "fade-right">
  Semeru Mountain
</div>
  <div class="grid-container1">
      <div class="text">
        <p>Semeru Mountain, most people recognize as just Semeru, is a volcano mountain that settled in East Java, precisely in Lumajang regency. Semeru in the <strong>highest mountain</strong>  in Java which has 3.676 meters above sea level and it also known as the Mahameru or Great Mountain.</p>
       <p>The name Semeru was derived from Hindu-Buddhist mythical mountain of Meru or Semeru, the abode of gods.</p>
       <p>The summit crater in Semeru is called Jonggring Saloka. In 1913 and 1946 the Jonggring Saloka Crater had dome with a height of 3744.8 M until end November 1973. At the southern side, the dome is broke the edge of the crater, which causes the flowing lava into the south side including Pronojiwo and Candipuro in Lumajang.</p>
      </div>
      <div class="bigimage">
        <img src="images/gunung.png" alt="Semeru Mountain">
      </div>
  </div>
<div class="title" id="Destination" data-aos= "fade-right">
  SPOT
</div>
<p class="text-title">There Is So Many Beautiful Place That you Can Visit During The Trip. </p>
<div class="grid-container">

  <div class="content">
    <a href="images/ranupanimodal.jpg" data-lightbox="roadtrip" data-title="Ranu Pani">
      <div class="content-overlay"></div>
      <img src="images/RanuPani.jpeg" alt="Ranu Pani" style="width: 90%">
      <div class="content-details fadeIn-top">
        <h3>Ranu Pani </h3>
        <p>Description</p>
      </div>
    </a>
  </div>
  <div class="content">
    <a href="images/ranukumboloo.jpg" data-lightbox="roadtrip" data-title="Ranu Kumbolo">
      <div class="content-overlay"></div>
      <img src="images/ranukumboloo.jpg" alt="Ranu Kumbolo" style="width: 90%">
      <div class="content-details fadeIn-top">
        <h3>Ranu Kumbolo</h3>
        <p>Description</p>
      </div>
    </a>
  </div>
  <div class="content">
    <a href="images/oroombo.jpg" data-lightbox="roadtrip" data-title="Oro-Oro Ombo">
      <div class="content-overlay"></div>
      <img src="images/oroombo.jpg" alt="oro oro ombo" style="width: 90%">
      <div class="content-details fadeIn-top">
        <h3>Oro-Oro Ombo </h3>
        <p>Description</p>
      </div>
    </a>
  </div>
  <div class="content">
    <a href="images/Kalimat.jpg" data-lightbox="roadtrip" data-title="Kali Mati">
      <div class="content-overlay"></div>
      <img src="images/Kalimat.jpg" alt="Kalimati" style="width: 90%">
      <div class="content-details fadeIn-top">
        <h3>Kali Mati</h3>
        <p>Description</p>
      </div>
    </a>
  </div>
  <div class="content">
    <a href="images/Tanjakan.jpg" data-lightbox="roadtrip" data-title="Tanjakan Cinta">
      <div class="content-overlay"></div>
      <img src="images/Tanjakan.jpg" alt="Tanjakan Cinta" style="width: 90%">
      <div class="content-details fadeIn-top">
        <h3>Tanjakan Cinta </h3>
        <p>Description</p>
      </div>
    </a>
  </div>
  <div class="content">
    <a href="images/puncak.jpg" data-lightbox="roadtrip" data-title="Puncak MAHAMERU">
      <div class="content-overlay"></div>
      <img src="images/puncak.jpg" alt="Puncak Semeru" style="width: 90%">
      <div class="content-details fadeIn-top">
        <h3>Puncak Mahameru</h3>
        <p>Description</p>
      </div>
    </a>
  </div>
</div>

<div class="next">
  <h5>And many More ...</h5>
</div>


<div class="title" id="Trip" data-aos= "fade-right">
OPEN TRIP
</div>
  <h4 class="text-title"> Sign Up Here </h4>
  <form method="post" action="#">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="name" name="Name" placeholder="Input Your Name" required>
    </div>
    <div class="form-group">
      <label for="Address">Adrress</label>
      <input type="text" class="form-control" id="Address" name="Adrress" placeholder="Input Your Address" required>
    </div>
    <div class="form-group">
      <label for="Phone">Phone Number</label>
      <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Input Your Phone Number" required>
    </div>
    <div class="form-group">
      <label for="People">How Many People</label>
      <input type="number" class="form-control" id="People" name="People" min ="1" max="20" placeholder="maximal 20" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select Your Package</label>
        <select class="form-control" id="Package">
          <option>Package 1</option>
          <option>Package 2</option>
          <option>Package 3</option>
        </select>
    </div>
    <input type="submit" name="Button" value="submit" class="btn btn-primary">

  </form>


  <div class="title" id="About">
  ABOUT
  </div>
@endsection
