<div>
    <div id="aside" class="{{ $sideBarOpen ? 'open' : 'close' }}">
        <!-- Your sidebar content here -->
    </div>

    <button wire:click="toggleSideBar">
        <i class="fas {{ $sideBarOpen ? 'fa-angles-left' : 'fa-angles-right' }}"></i>
    </button>
</div>
