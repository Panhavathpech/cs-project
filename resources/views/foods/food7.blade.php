@extends('layouts.default')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/new-blog-7.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Sky-High Strawberry Muffin Recipe</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Article Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
            <h2 class="mb-3">Grab and go with all the best flavors in a muffin bursting with strawberries.</h2>
            <p>Mike and I have decided that we’re going to go adventuring more! Essentially, we’re going to: get out of the house more, enjoy the outdoors, go camping, go on hikes, and milk the moment for all that it’s worth. Mike thinks this means that we’re going to be climbing mountains and doing fun stuff like caving or maybe hot air ballooning, but I’m thinking more along the lines of mini-golf and early morning walks on the beach. Who knows, maybe it’ll be a mix of the two?</p>
            <p>
              <img src="{{ asset('images/image_6.jpg')}}" alt="" class="img-fluid">
            </p>
            <p>We have been going on a lot of walks lately, as per our usual, and there have been a bunch of late local strawberries popping up everywhere. I love seeing all the different varieties and little baskets full of tiny strawberries. Most of the time I like eating fruit as is, but when you’re itching for adventure, squished fruit isn’t really the answer. So, I baked up some local strawberries into portable packable muffins and we went out to the lake for a little mini adventure, just to ease into it. We ate the muffins lakeside, in the sun, then spent the rest of the day wandering the trails and admiring the views.</p>
            <p>I used my all-time favorite muffin recipe (find it here!) but swapped out the blueberries for strawberries that I tossed in a bit of sugar for that extra bit of sweetness. And, most importantly for Mike, I switched out regular milk to Lactaid. A lot of peeps have a sensitivity to lactose and don’t know about it – luckily I’m not one of them, but when I first met Mike he actively avoided all things with milk. It’s kind of funny because he has an encyclopedic knowledge of which baked goods have milk in them or at least, which baked goods he could eat without having a reaction (carrot cakes, grocery store danishes, giant muffins, rice krispie squares, and apple pies from a well-known fast food joint that has golden arches).</p>
            <p>
            He doesn’t need the list anymore because he’s not as sensitive (yay because dairy!), but really, he doesn’t need to worry anyway because now we can just bake and make everything with Lactaid, which is milk, but with the lactose removed. It’s excellent for cooking too – I just made a béchamel with it the other day.
            </p>
            <p>Hope you guys get a chance to make these muffins! I’ve been really muffin crazy lately even though I’ve only posted two recipes on the blog (here and here) they’ve kind of been a staple for breakfast. I love how this particular recipe only makes six muffins and how quickly it comes together. Muffins forever!</p>
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