@extends('layouts.default')

@section('content')

@include('partials.navbar')


<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col padding-mobile">

    <div class="text-center lg:w-2/3 w-full">
      <h1 class="text-title name_welcome title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Nos abonnements</h1>
      @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
          @endif
      <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>
    </div>
</section>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 pb-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
        <div id="plan1" class="h-full p-6 rounded-lg border-2 flex flex-col relative overflow-hidden">
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">LE CURIEUX</h2>
          <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span>19€</span>
            <span class="text-lg ml-1 font-normal text-white">/mois</span>
          </h1>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>- 10% sur toutes vos additions
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Le café offert à la fin du repas
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span> Possiblité de choisir sa table au moment de la réservation
          </p>
          <button class="modal-open btn_white flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">S'abonner
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <!-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> -->
        </div>
      </div>
      <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
        <div id="plan2" class="h-full p-6 rounded-lg border-2  flex flex-col relative overflow-hidden">
          <span class="bg-white text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl" style="color:black">Le + populaire</span>
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">LE GOURMAND</h2>
          <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span>39€</span>
            <span class="text-lg ml-1 font-normal text-white">/mois</span>
          </h1>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>- 25% sur toutes vos additions
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Un pichet de vin offert durant le repas
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Possiiblité de choisir sa table au moment de la réservation
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>- 10% sur la carte des boissons
          </p>
          <button class="modal-open btn_white flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">S'abonner
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <!-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> -->
        </div>
      </div>
      <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
        <div id="plan3" class="h-full p-6 rounded-lg border-2  flex flex-col relative overflow-hidden">
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">LE PASSIONÉ</h2>
          <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span>69€</span>
            <span class="text-lg ml-1 font-normal text-white">/mois</span>
          </h1>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>- 35% sur toutes vos additions
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>Bouteille de vin offerte ainsi que le café
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>1 repas offert dans le mois
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>- 15% sur la carte des boissons
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span> Possibilité de carafer le vin sur demande avant votre arrivée
          </p>
          <button class="modal-open btn_white flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">S'abonner
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <!-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> -->
        </div>
      </div>
    </div>
  </div>



  </div>

    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12  mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <div class="container px-5 py-4 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="text-title sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Payer maintenant</h1>
      <p class="text lg:w-2/3 mx-auto leading-relaxed text-base">Vos informations bancaires sont sécurisés.</p>
    </div>


    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <form method="post" id="payment-form">
        @csrf
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <div class="relative mb-4">
            <label for="name" class="leading-7  text-gray-600">Nom</label>
            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>

          <div class="mt-4">
            <span class="text-gray-700">Choisissez votre abonnement</span>
            <div class="mt-2">
              @foreach ($plans as $plan)
              <div>
                <label class="inline-flex items-center" for="{{ $plan->id }}">
                  <input type="radio" class="form-radio" name="plan" id="card-holder-name {{ $plan->id }}" value="{{ $plan->id }}">
                  <span class=" text ml-2">Abonnement {{ $plan->name }} | ({{ number_format($plan->price / 1, 2, ',', ' ') }} €)</span>
                </label>
              </div>
              @endforeach
            </div>
          </div>
          <div class="mt-4 mb-4">
            <div id="card-element">
              <!-- Elements will create input elements here -->
            </div>

            <!-- We'll put the error messages in this element -->
            <div id="card-errors" role="alert"></div>

          </div>
          <div class="p-2 w-full">
            <button data-secret="{{ $intent->client_secret }}" id="card-button" class="btn_green flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">S'abonner</button>
          </div>
          <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
      </form>
    </div>
  </div>

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button class=" btn_green_fill modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>

</section>

<script>

  const stripe = Stripe('pk_test_51IzzUJCGb4feCcQRhKmiQaqDqvmYkQ8JqMkUQyZmvaxCA1gNBUt2iN2OLjvnJwx57NiWaYOlLZIRy6XjODErCFRQ00nbcj8dJn');
  const elements = stripe.elements();
    const card = elements.create("card");
    card.mount("#card-element");
    const cardHolderName = document.getElementById('name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    card.on('change', ({error}) => {
      let displayError = document.getElementById('card-errors');
      if (error) {
        displayError.textContent = error.message;
      } else {
        displayError.textContent = '';
      }
    });
    const form = document.getElementById('payment-form');
form.addEventListener('submit', async (e) => {
  e.preventDefault();
  let displayError = document.getElementById('card-errors');
   const { setupIntent, error } = await stripe.confirmCardSetup(
        clientSecret, {
            payment_method: {
                card: card,
                billing_details: { name: cardHolderName.value }
            }
        }
    );
    if (error) {
        displayError.textContent = error.message;
    } else {
        displayError.textContent = '';
        //console.log(setupIntent);
        
        let paymentMethod = document.createElement('input');
        paymentMethod.setAttribute('type', 'hidden');
        paymentMethod.setAttribute('name', 'payment_method');
        paymentMethod.value = setupIntent.payment_method;
        form.appendChild(paymentMethod);
        form.submit();
    }
});

var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

</script>
@include('partials.footer')

@endsection