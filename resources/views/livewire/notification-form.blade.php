<div>
    @if(session()->has('success'))
    
    <form action="" wire:submit.prevent="store" class="invisible z-n1">
        <p class="d-inline-flex gap-1">
            
            <button class="btn btn-primary" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" wire:click="">
                Notifiche livewire form
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <input wire:model='success' type="text" />
            </div>
        </div>
    </form>
    @endif

    @if(session()->has('error'))
    <form action="" wire:submit.prevent="store">
        <p class="d-inline-flex gap-1">
            
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" wire:click="">
                Notifiche livewire
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <input wire:model='error' type="text" />
            
            </div>
           
        </div>
    </form>
    @endif
</div>
