@include('layout.header')
@include('layout.nav-bar')
<div class="artboard">
    <div class="banner-carousel" >
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="{{asset('/assets/visual/slide01.jpg')}}" style="width:100%">
              <div class="text">Caption slide01</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="{{asset('/assets/visual/slide02.jpg')}}" style="width:100%">
              <div class="text">Caption slide02</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="{{asset('/assets/visual/slide03.jpg')}}" style="width:100%">
              <div class="text">Caption slide03</div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
    </div>
    <div class="service">
        <h1 class="text-service">SERVICE</h1>
        <div class="cards-container">
            <div class="card">
                <img src="{{asset('/assets/service/service-desc01.jpg')}}" style="width:100%">
                <h2>Service title</h2>
                <p class="caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus consequatur sapiente debitis quasi quaerat fuga amet eos tempora architecto esse.</p>
            </div>
            <div class="card">
                <img src="{{asset('/assets/service/service-desc02.jpg')}}" style="width:100%">
                <h2>Service title</h2>
                <p class="caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus consequatur sapiente debitis quasi quaerat fuga amet eos tempora architecto esse.</p>
            </div>
            <div class="card">
                <img src="{{asset('/assets/service/service-desc03.jpg')}}" style="width:100%">
                <h2>Service title</h2>
                <p class="caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus consequatur sapiente debitis quasi quaerat fuga amet eos tempora architecto esse.</p>
            </div>
            <div class="card">
                <img src="{{asset('/assets/service/service-desc04.jpg')}}" style="width:100%">
                <h2>Service title</h2>
                <p class="caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus consequatur sapiente debitis quasi quaerat fuga amet eos tempora architecto esse.</p>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="about-container">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum illo rem quasi exercitationem sit obcaecati, similique autem provident commodi quas voluptates expedita doloremque dolorum pariatur dignissimos beatae consectetur quidem ullam excepturi doloribus, voluptatem ipsam id? Dolores est delectus sint mollitia eius autem debitis nobis minus asperiores! Dignissimos neque ex, porro debitis tempora vitae optio qui totam recusandae facere cum accusamus, quae ea. Non veritatis voluptatem sit dolore blanditiis porro architecto mollitia cupiditate. Assumenda, mollitia aperiam eaque vitae vero, voluptatum!</p>
        </div>
    </div>
    <div class="news">
        <h1>News</h1>
        <div class="group-info">
            @php
                $repeat = 3;
            @endphp
            @for($i=0;$i<$repeat;$i++)
            <div class="part-info">
                <button class="btn-E3007F group-space">Information</button>
                <span class="group-space">2018.04.18</span>
                <span class="group-space">Somethin news title is here, this is dummy text.Somethin news title is here, this is dummy text.</span>
            </div>
            <div class="part-info">
                <button class="btn-009FE8 group-space">Recruitment</button>
                <span class="group-space">2018.04.18</span>
                <span class="group-space">Somethin news title is here, this is dummy text.Somethin news title is here, this is dummy text.</span>
            </div>
            @endfor
        </div>
        <div class="news-list">
            <div>
                <div class="seems-btn">
                    <p>Show News List</p>
                </div>
                <div class="back-btn"></div>
            </div>
        </div>
    </div>
    <div class="google-map-container">
        <p class="text-contact">Contact/Map</p>
        <div class="google-map-small-box">
            {{-- <p class="google-map-text">Google map</p> --}}
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.965763603835!2d-122.41941568468162!3d37.77492927975922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085817b730c7a1b%3A0x20c2b63d4b92b473!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sph!4v1629201856898!5m2!1sen!2sph"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
        </div>
    </div>
@include('layout.footer')
</div>  
<script src="js/scripts.js"></script>

