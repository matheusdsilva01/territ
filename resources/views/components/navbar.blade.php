<?php

declare(strict_types=1);

?>

<header class="bg-elevation-01dp border-outline-dark sticky top-0 flex border-b px-8 py-4">
    <nav class="ms-auto">
        @if (Auth()->user())
            <div>
                {{ $this->logoutAction }}
            </div>
        @else
            <div>
                {{ $this->loginAction }}
            </div>
        @endif
    </nav>
</header>

<?php
