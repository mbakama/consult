<div class="card-body">
    <div class="dropdown float-end">
        <a href="#" class="dropdown-toggle arrow-none card-drop"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i><iconify-icon icon="mdi:dots-horizontal"></iconify-icon></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">View full</a>
            <!-- item-->
            {{-- <a href="javascript:void(0);" class="dropdown-item">Edit Contact Info</a> --}}
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">Remove</a>
        </div>
    </div>

    <div class="mt-3 text-center">
        <img src="assets/images/users/avatar-5.jpg" alt="shreyu"
            class="img-thumbnail avatar-lg rounded-circle" />
        <h4>{{ $all->name }}</h4>
        <button class="btn btn-primary btn-sm mt-1">
            <i class="me-1"><iconify-icon icon="uil:envelope-add"></iconify-icon></i>Send Email
        </button>
        <p class="text-muted mt-2 font-14">
            Last Interacted: <strong>Few hours back</strong>
        </p>
    </div>

    <div class="mt-3">
        <hr class="" />

        <p class="mt-4 mb-1">
            <strong><i><iconify-icon icon="uil:at"></iconify-icon></i> Email:</strong>
        </p>
        <p>{{ $all->email }}</p>

        <p class="mt-3 mb-1">
            <strong><i><iconify-icon icon="uil:phone"></iconify-icon></i> Phone Number:</strong>
        </p>
        <p>+1 456 9595 9594</p>

        <p class="mt-3 mb-1">
            <strong><i><iconify-icon icon="uil:location"></iconify-icon></i> Location:</strong>
        </p>
        <p>California, USA</p>

        <p class="mt-3 mb-1">
            <strong><i><iconify-icon icon="uil:globe"></iconify-icon></i> Languages:</strong>
        </p>
        <p>English, German, Spanish</p>

        <p class="mt-3 mb-2">
            <strong><i><iconify-icon icon="uil:users-alt"></iconify-icon></i> Groups:</strong>
        </p>
        <p class="mb-0">
            <span class="badge badge-success-lighten p-1 font-14">Work</span>
            <span class="badge badge-primary-lighten p-1 font-14">Friends</span>
        </p>
    </div>
</div>