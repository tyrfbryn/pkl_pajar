@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Trending Tittle -->
                <div class="about-right mb-90">
                    <div class="trend-top-img mt-5">
                        <img src="{{ asset('/images/artikel/' . $artikel->cover) }}" width="500" alt="">
                        <div class="trend-top-cap">
                            <span>{{ $artikel->kategori->nama_kategori }}</span>
                            <h2>{{ substr($artikel->judul, 0, 30) }}</h2>
                        </div>
                    </div>
                    <div class="about-img">
                        <img src="assets/img/trending/trending_top.jpg" alt="">
                    </div>
                    {{-- <div class="section-tittle mb-30 pt-30">
                        <h3>Here come the moms in space</h3>
                    </div> --}}
                    <div class="about-prea">
                        <p class="about-pera1 mb-25" style="text-align: justify">{{ $artikel->isi }}</p>
                    </div>

                </div>
                <!-- From -->
                {{-- <div class="row">
                    <div class="col-lg-8">
                        <form class="form-contact contact_form mb-80" action="contact_process.php" method="post"
                            id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control error" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                            placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control error" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control error" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div id="disqus_thread"></div>
                <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://assalaam-berita.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                        by Disqus.</a></noscript>
            </div>
        </div>
    </div>
@endsection
