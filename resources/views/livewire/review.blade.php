<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form wire:submit.prevent="store" class="contact-form">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <input class="input" wire:model="subject" type="text" placeholder="Subject">
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-lg-12">
                <textarea class="input" wire:model="review" type="text" placeholder="Your review"></textarea>
                @error('review')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-lg-12">
                @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                <div class="row">
                    <div class="col-lg-3">
                        Your Rate:
                    </div>

                <div class="col-lg-9">

                    <i class="fa fa-star"><input type="radio" id="star5" wire:model="rate" value="1"/></i>
                    <i class="fa fa-star"><input type="radio" id="star4" wire:model="rate" value="2"/></i>
                    <i class="fa fa-star"><input type="radio" id="star3" wire:model="rate" value="3"/></i>
                    <i class="fa fa-star"><input type="radio" id="star2" wire:model="rate" value="4"/></i>
                    <i class="fa fa-star"><input type="radio" id="star1" wire:model="rate" value="5"/></i>
                </div>
                </div>
            </div>
            <div>
                @auth
                    <input type="submit" class="col-lg-12 text-right" value="save" >
                @else
                    <a href="/login" class="primary-btn">If you submit review,please login</a>
                @endauth
            </div>

        </div>
    </form>

</div>




