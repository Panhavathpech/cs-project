@extends('layouts.default')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/new-blog-6.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Extra Flaky Sky High Cheddar Scallion Biscuits</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Article Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
            <h2 class="mb-3">Make these sky-high extra flaky biscuits with cheddar and scallions – future you will thank present you ;)</h2>
            <p>These extra flaky sky high cheddar scallion biscuits are my everything right now. Are you a biscuit person? I’m definitely a biscuit person. If I see biscuits on the menu, especially if they’re the kind that will come hot and fresh out of the oven, I will obviously order them. Flaky, buttery, hot biscuits are my jam. Heck, biscuits and jam are my jam. I dig all kinds of biscuits. Savory, sweet, giant, mini, just give me all the biscuits, please and thank you.</p>
            <p>
              <img src="{{ asset('images/image_6.jpg')}}" alt="" class="img-fluid">
            </p>
            <p>The problem with biscuits is that I can’t make them too often. It’s because I will eat every.single.last.biscuit. I mean, I could give them away or maybe Mike could eat one or two, but like the crazy biscuit lady that I am, I will hoard them and eat them and generally turn into a biscuit myself. So, I very rarely make biscuits, maybe like, six times a year. That’s rare right? I feel like I make biscuits about as often as mercury is in retrograde. Which, it is right now, apparently. If you believe in the whole mercury in retrograde stuff, maybe you need a little bit of extra comfort. Enter: biscuits.</p>
            <p>Not just any biscuits. Extra cheesy, extra flaky, extra comforting biscuits. Biscuits invented by one of the most genuinely caring and sweet individuals I know, Cynthia of Two Red Bowls. If you aren’t familiar with Cynthia, here’s a quick rundown: she gives amazing hugs – the kind that really feel solid, much more solid than you imagine from a tiny Chinese girl; she has an gorgeous blog full of recipes that make me drool; and she recent published a cookbook! I’m a little late to the party, but I must tell you, if you’re looking for a cookbook that’s gorgeously written and photographed, pick up A Common Table. I devoured the entire book the minute I got it.</p>
            <p>There were so many recipes I wanted to make (Korean cheesy corn! Milk Tea Rice Pudding! Buttermilk Mochi Pancakes!) but being the biscuit lover I am, the cheddar scallion biscuits called so I answered. Flaky and cheesy and everything good, these biscuits are the kind that I’m definitely going to hoard and devour over the next two days. They come together super quickly and use a letter folding dough laminating technique for extra flaky layers. SO GOOD. Please make a batch of these then invite me over, please and thanks!</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="{{ asset('images/person_1.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>


            <div class="pt-5 mt-5">
            <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://khmerrecipes-4.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <ul class="categories">
                <h3 class="heading mb-4">Categories</h3>
                <li><a href="#">Travel <span>(12)</span></a></li>
                <li><a href="#">Tour <span>(22)</span></a></li>
                <li><a href="#">Destination <span>(37)</span></a></li>
                <li><a href="#">Drinks <span>(42)</span></a></li>
                <li><a href="#">Foods <span>(14)</span></a></li>
                <li><a href="#">Travel <span>(140)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading mb-4">Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('images/new-image_1.jpg')}}');"></a>
                <div class="text">
                  <h3><a href="{{ route('fooda1')}}">Fish Soup Recipe: Khmer Hot and Sour Coconut Fish Soup (Somlar Machu Ktiss)</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> February 12, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('images/new-image_2.jpg')}}');"></a>
                <div class="text">
                  <h3><a href="{{ route('fooda2')}}">Cambodian Spicy Papaya Beef Salad Recipe (Lahong Plea Sach Ko)</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> February 12, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('images/new-image_3.jpg')}}');"></a>
                <div class="text">
                  <h3><a href="{{ route('fooda3')}}">Num Ansom Chek Recipe: A Popular Cambodian Dessert</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> February 12, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading mb-4">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading mb-4">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
    @endsection