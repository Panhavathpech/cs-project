@extends('layouts.default')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/new-blog-2.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Mile High Mini Japanese Soufflé Pancakes Recipe</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Article Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
            <h2 class="mb-3">Long weekends are made for mini mile high Japanese soufflé pancakes.</h2>
            <p>Aren’t these the cutest pancakes ever?! Ever since I made the regular size Japanese soufflé pancakes, I’ve been wanting to make mini ones. Well, what actually happened was that I was talking about them so much, trying to figure out what other ways I could make them fun that Mike suggested mini. And here we are. I think I might even like the mini ones more than the regular.</p>
            <p>
              <img src="{{ asset('images/image_6.jpg')}}" alt="" class="img-fluid">
            </p>
            <p>For one thing, they’re bite-sized and adorable. For another, they’re actually easier to make because they’re mini. They’re easier to flip and they cook a bit faster. The cook time on them is important because they need to be fully cooked or they’re deflate.</p>
            <p>Here are some tips on making Japanese soufflé pancakes, either mini or regular size!</p>
            <p>
                <ol>
                    <li>The number one tip is: make sure you have properly whipped meringue. That means, ensure that all of your egg white whipping utensils are free of fat or oil (give everything a good wash in hot soapy water), use cream of tartar to add some stability, and add the sugar in bit by bit. The egg whites are done when you lift the beater from the bowl and they hold a peak. If you tilt the bowl, the white should not slide and there should be no more water whites left.</li>
                    <li>Separate your eggs while they’re cold, but beat them when they’re room temp – room temp eggs beat up fluffier.</li>
                    <li>When you’re incorporating the egg whites into the yolks, use a whisk so you don’t deflate your whites too much). Add 1/3 of the whites to the yolks, and whisk while turning the bowl, using a tapping motion. Stir 5-6 times in a circular motion, then add the next 1/3 meringue and do the same motions, being sure to scoop up the batter with the whisk. Add the last 1/3 of the meringue with the same motions then switch to a spatula to fold and mix throughly.</li>
                    <li>The batter is ready when it can hold it’s own shape. When you lift some of it up with the spatula and let it settle down, it’ll still be a blob with no slumping or sinking.</li>
                    <li>Low heat is key. It takes a really long time to cook these pancakes because the low heat makes sure that the pancakes are cooked through evenly. You can add a couple of drops of water to the pan before covering to encourage steaming.</li>
                    <li>Make sure the pancakes are cooked long enough before adding the second bit of batter. If they aren’t cooked enough, they won’t have enough structure to hold up the new batter and they will sink and deflate more than if you take the time to let the first bit cook long enough.</li>
                    <li>In the same vein, make sure the pancakes are cooked enough before you flip them otherwise flipping them will cause them to deflate even more.</li>
                    <li>Also, make sure the pancakes are fully cooked removing them from the heat. They will deflate a little bit – that’s the nature of soufflés, even regular French ones. Time everything right so when they come out of the pan, you’re ready to eat.</li>
                </ol>
            </p>
            <p>Hope that helps and fluffy pancakes (mini or big) are in your future!</p>
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