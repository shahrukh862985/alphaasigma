<div class="row">
    <!-- form -->
    <form wire:submit.prevent="submit">
        <div class="col-md-12 col-sm-12 center-col">
            <div class="row"><div class="col-md-12 col-sm-12"><div class="wide-separator-line margin-seven"></div></div>
                <div class="col-md-12 col-sm-12">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                @endif
                    
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <input name="name" wire:model.defer="name" type="text" placeholder="Your Name" />
                @error('name') <span class="text-danger text-small">{{ $message }}</span> @enderror
                <input name="email" wire:model.defer="email" type="text" placeholder="Your Email"  />
                @error('email') <span class="text-danger text-small">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <textarea name="message" wire:model.defer="message" placeholder="Your Message" ></textarea>
                @error('message') <span class="text-danger text-small">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6 no-padding-left"><span class="required">*Please complete all fields correctly</span></div>
                <div class="col-md-3 col-sm-6 f-right no-padding-right"><input wire:loading.attr="disabled" id="contact-us-button" name="send message" type="submit" value="send message" class="btn btn-black no-margin-top f-right no-margin-lr"></div>
            </div>
        </div>
    </form>
    <!-- end form -->
</div>
