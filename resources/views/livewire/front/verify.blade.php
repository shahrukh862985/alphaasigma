<div class="row">
    <!-- form -->
    <form wire:submit.prevent="submit">
        <div class="col-md-8 col-sm-12 center-col">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="wide-separator-line"></div>
                </div>
                <div class="col-md-12 col-sm-12">
                    @if (session()->has('message'))
                    <div class="alert {{ session('message')['style_class'] }}">
                        {{ session('message')['text'] }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12">
                    <input name="product_code" wire:model.defer="product_code" type="text" placeholder="Enter Product Code" />
                    @error('product_code') <span class="text-danger text-small">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-3 col-sm-6 f-right no-padding-right"><input wire:loading.attr="disabled" name="send message" type="submit" value="Verify Product" class="btn btn-black no-margin-top f-right no-margin-lr"></div>
                </div>
            </div>
            
        </div>
    </form>
    <!-- end form -->
</div>