<!--NavBar -->
    <nav class="relative container mx-auto p-6 ">

        <!--flex container -->
            <div class="flex items-center justify-between">
                <div class="pt-2">
                  <img src="{{ asset('/img/logo.svg') }}" alt="">
                </div>

             <!--menu items -->
              <div class="hidden space-x-6  md:flex">
                  <a class="hover:text-gray-300" href="#">
                    Home
                  </a>
                <!--<a class="hover:text-gray-300" href=" route('product.index') ">
                    Products
                  </a>
                  <a class= "hover:text-gray-300"  href=" route('cart.index')">
                    Cart
                  </a>
                  <a class="hover:text-gray-300" href=" route('home.about') ">
                    About
                  </a>-->

                 <!--button for login-->
                  @guest
                  <!--<a class="hover:text-gray-300" href=" route('login') ">
                      Login
                  </a>
                  <a class="hover:text-gray-300" href=" route('register') ">
                      Register
                  </a>-->
                  @else
                  <a class="hover:text-gray-300" href="{{ route('myaccount.orders') }}">
                      My Orders
                  </a>
                  <form id="logout" action="{{ route('logout') }}" method="POST">
                    <a role="button" class="hover:text-gray-300  no-underline"
                       onclick="document.getElementById('logout').submit();">
                       Logout
                    </a>
                    @csrf
                  </form>
                 @endguest
               </div>
            </div>

        </nav>
