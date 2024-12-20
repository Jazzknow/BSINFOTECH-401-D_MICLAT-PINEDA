<title>Create Product</title>
<link rel="icon" sizes="32x32" type="image/png" href="{{ asset('images/product_logo_tab.png') }}">
<section class="section event bg-black-10" aria-label="event">
    <div class="container">

        <p class="section-subtitle label-2 text-center">Foods</p>

        <h2 class="section-title headline-1 text-center">Product List</h2>

        <ul class="grid-list">
            <?php foreach ($product as $products): ?>
            <li>
                <div class="event-card has-before hover:shine">
                    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                        <img src="{{ asset($products->photo) }}" width="350" height="450" loading="lazy"
                            alt="{{ $products->product_name }}" class="img-cover">

                        <time class="publish-date label-2" datetime="2022-09-15">{{ $products->price }}</time>
                    </div>

                    <div class="card-content">
                        <p class="card-subtitle label-2 text-center">{{ $products->sub_name }}</p>

                        <h3 class="card-title title-2 text-center">
                            {{ $products->product_name }}
                        </h3>

                        <p class="card-text text-center">
                            {{ $products->description }}
                        </p>
                    </div>
                    <div class="card-actions">
                        <a href="{{ route('products.show', $products->id) }}" class="btn-action btn-view">
                            <span class="text">View</span>
                        </a>
                        <a href="{{ route('products.edit', $products->id) }}" class="btn-action btn-edit">
                            <span class="text">Edit</span>
                        </a>
                        <form action="{{ route('products.destroy', $products->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action btn-delete">
                                <span class="text">Delete</span>
                            </button>
                        </form>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>

        <a href="#" class="btn btn-primary">
            <span class="text text-1">View Our Product</span>

            <span class="text text-2" aria-hidden="true">View Our Product</span>
        </a>

    </div>
</section>
<style>
    /*-----------------------------------*\
  #index.css
\*-----------------------------------*/

    /**
 * copyright 2022 codewithsadee
 */

    /*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

    :root {
        /**
     * COLORS
     */

        --gold-crayola: hsl(38, 61%, 73%);
        --quick-silver: hsla(0, 0%, 65%, 1);
        --davys-grey: hsla(30, 3%, 34%, 1);
        --smoky-black-1: hsla(40, 12%, 5%, 1);
        --smoky-black-2: hsla(30, 8%, 5%, 1);
        --smoky-black-3: hsla(0, 3%, 7%, 1);
        --eerie-black-1: hsla(210, 4%, 9%, 1);
        --eerie-black-2: hsla(210, 4%, 11%, 1);
        --eerie-black-3: hsla(180, 2%, 8%, 1);
        --eerie-black-4: hsla(0, 0%, 13%, 1);
        --white: hsla(0, 0%, 100%, 1);
        --white-alpha-20: hsla(0, 0%, 100%, 0.2);
        --white-alpha-10: hsla(0, 0%, 100%, 0.1);
        --black: hsla(0, 0%, 0%, 1);
        --black-alpha-80: hsla(0, 0%, 0%, 0.8);
        --black-alpha-15: hsla(0, 0%, 0%, 0.15);

        /**
     * GRADIENT COLOR
     */

        --loading-text-gradient: linear-gradient(90deg,
                transparent 0% 16.66%,
                var(--smoky-black-3) 33.33% 50%,
                transparent 66.66% 75%);
        --gradient-1: linear-gradient(to top,
                hsla(0, 0%, 0%, 0.9),
                hsla(0, 0%, 0%, 0.7),
                transparent);

        /**
     * TYPOGRAPHY
     */

        /* font-family */
        --fontFamily-forum: "Forum", cursive;
        --fontFamily-dm_sans: "DM Sans", sans-serif;

        /* font-size */
        --fontSize-display-1: calc(1.3rem + 6.7vw);
        --fontSize-headline-1: calc(2rem + 2.5vw);
        --fontSize-headline-2: calc(1.3rem + 2.4vw);
        --fontSize-title-1: calc(1.6rem + 1.2vw);
        --fontSize-title-2: 2.2rem;
        --fontSize-title-3: 2.1rem;
        --fontSize-title-4: calc(1.6rem + 1.2vw);
        --fontSize-body-1: 2.4rem;
        --fontSize-body-2: 1.6rem;
        --fontSize-body-3: 1.8rem;
        --fontSize-body-4: 1.6rem;
        --fontSize-label-1: 1.4rem;
        --fontSize-label-2: 1.2rem;

        /* font-weight */
        --weight-regular: 400;
        --weight-bold: 700;

        /* line-height */
        --lineHeight-1: 1em;
        --lineHeight-2: 1.2em;
        --lineHeight-3: 1.5em;
        --lineHeight-4: 1.6em;
        --lineHeight-5: 1.85em;
        --lineHeight-6: 1.4em;

        /* letter-spacing */
        --letterSpacing-1: 0.15em;
        --letterSpacing-2: 0.4em;
        --letterSpacing-3: 0.2em;
        --letterSpacing-4: 0.3em;
        --letterSpacing-5: 3px;

        /**
     * SPACING
     */

        --section-space: 70px;

        /**
     * SHADOW
     */

        --shadow-1: 0px 0px 25px 0px hsla(0, 0%, 0%, 0.25);

        /**
     * BORDER RADIUS
     */

        --radius-24: 24px;
        --radius-circle: 50%;

        /**
     * TRANSITION
     */

        --transition-1: 250ms ease;
        --transition-2: 500ms ease;
        --transition-3: 1000ms ease;
    }

    /*-----------------------------------*\
    #RESET
  \*-----------------------------------*/

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    li {
        list-style: none;
    }

    a,
    img,
    data,
    span,
    input,
    button,
    select,
    ion-icon,
    textarea {
        display: block;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    img {
        height: auto;
    }

    input,
    button,
    select,
    textarea {
        background: none;
        border: none;
        font: inherit;
    }

    input,
    select,
    textarea {
        width: 100%;
        outline: none;
    }

    button {
        cursor: pointer;
    }

    address {
        font-style: normal;
    }

    html {
        font-size: 10px;
        scroll-behavior: smooth;
    }

    body {
        background-color: var(--eerie-black-1);
        color: var(--white);
        font-family: var(--fontFamily-dm_sans);
        font-size: var(--fontSize-body-4);
        font-weight: var(--weight-regular);
        line-height: var(--lineHeight-5);
    }

    body.loaded {
        overflow: overlay;
    }

    body.nav-active {
        overflow: hidden;
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: var(--gold-crayola);
    }

    /*-----------------------------------*\
    #TYPOGRAPHY
  \*-----------------------------------*/



    .label-1 {
        font-size: var(--fontSize-label-1);
    }

    .label-2 {
        font-size: var(--fontSize-label-2);
    }

    /*-----------------------------------*\
    #REUSED STYLE
  \*-----------------------------------*/

    .container {
        padding-inline: 16px;
    }

    .separator {
        width: 8px;
        height: 8px;
        border: 1px solid var(--gold-crayola);
        transform: rotate(45deg);
    }

    .contact-label {
        font-weight: var(--weight-bold);
    }

    .contact-number {
        color: var(--gold-crayola);
        max-width: max-content;
        margin-inline: auto;
    }

    .hover-underline {
        position: relative;
        max-width: max-content;
    }

    .hover-underline::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 5px;
        border-block: 1px solid var(--gold-crayola);
        transform: scaleX(0.2);
        opacity: 0;
        transition: var(--transition-2);
    }

    .hover-underline:is(:hover, :focus-visible)::after {
        transform: scaleX(1);
        opacity: 1;
    }

    .contact-number::after {
        bottom: -5px;
    }

    .text-center {
        text-align: center;
    }

    .img-cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .section-subtitle {
        position: relative;
        color: var(--gold-crayola);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-2);
        margin-block-end: 12px;
    }

    .section-subtitle::after {
        content: url("../images/separator.svg");
        display: block;
        width: 100px;
        margin-inline: auto;
        margin-block-start: 5px;
    }

    .btn {
        position: relative;
        color: var(--gold-crayola);
        font-size: var(--fontSize-label-2);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-5);
        max-width: max-content;
        border: 2px solid var(--gold-crayola);
        padding: 12px 45px;
        overflow: hidden;
        z-index: 1;
    }

    .btn::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        height: 200%;
        border-radius: var(--radius-circle);
        background-color: var(--gold-crayola);
        transition: var(--transition-2);
        z-index: -1;
    }

    .btn .text {
        transition: var(--transition-1);
    }

    .btn .text-2 {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        min-width: max-content;
        color: var(--smoky-black-1);
    }

    .btn:is(:hover, :focus-visible)::before {
        bottom: -50%;
    }

    .btn:is(:hover, :focus-visible) .text-1 {
        transform: translateY(-40px);
    }

    .btn:is(:hover, :focus-visible) .text-2 {
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .btn-secondary {
        background-color: var(--gold-crayola);
        color: var(--black);
    }

    .btn-secondary::before {
        background-color: var(--smoky-black-1);
    }

    .btn-secondary .text-2 {
        color: var(--white);
    }

    .has-before,
    .has-after {
        position: relative;
        z-index: 1;
    }

    .has-before::before,
    .has-after::after {
        content: "";
        position: absolute;
    }

    .section {
        position: relative;
        padding-block: var(--section-space);
        overflow: hidden;
        z-index: 1;
        padding: 20px 20px;
    }

    .bg-black-10 {
        background-color: var(--smoky-black-2);
    }

    .grid-list {
        display: grid;
        gap: 40px;
    }

    .hover\:shine {
        position: relative;
    }

    .hover\:shine::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background-image: linear-gradient(to right, transparent 0%, #fff6 100%);
        transform: skewX(-0.08turn) translateX(-180%);
    }

    .hover\:shine:is(:hover, :focus-within)::after {
        transform: skewX(-0.08turn) translateX(275%);
        transition: var(--transition-3);
    }

    .img-holder {
        aspect-ratio: var(--width) / var(--height);
        overflow: hidden;
        background-color: var(--eerie-black-4);
    }

    .btn-text {
        color: var(--gold-crayola);
        padding-block-end: 4px;
        margin-inline: auto;
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-3);
        font-weight: var(--weight-bold);
        transition: var(--transition-1);
    }

    .btn-text:is(:hover, :focus-visible) {
        color: var(--white);
    }





    /*-----------------------------------*\
    #EVENT
  \*-----------------------------------*/

    .event .section-title {
        margin-block-end: 40px;
    }

    .event-card {
        position: relative;
        overflow: hidden;
    }

    .event-card .card-content {
        background-image: var(--gradient-1);
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 35px 35px 65px 25px;
    }

    .event-card .publish-date {
        position: absolute;
        top: 30px;
        left: 25px;
        padding: 5px 10px;
        color: var(--gold-crayola);
        background-color: var(--black);
        font-weight: var(--weight-bold);
        letter-spacing: var(--letterSpacing-1);
        line-height: 14px;
    }

    .event-card .card-subtitle {
        color: var(--gold-crayola);
        text-transform: uppercase;
        font-weight: var(--weight-bold);
        letter-spacing: var(--letterSpacing-2);
        margin-block-end: 5px;
    }

    .event-card .card-banner .img-cover {
        transition: var(--transition-2);
    }

    .event-card:is(:hover, :focus-within) .img-cover {
        transform: scale(1.05);
    }

    .event .btn {
        margin-inline: auto;
        margin-block-start: 40px;
    }



    /*-----------------------------------*\
    #MEDIA QUERIES
  \*-----------------------------------*/

    /**
   * responsive for larger than 575px screen
   */

    @media (min-width: 575px) {
        /**
     * CUSTOM PROPERTY
     */

        :root {
            /**
       * typography
       */

            --fontSize-body-2: 2rem;
        }

        /**
     * REUSED STYLE
     */

        :is(.service, .about) .section-text {
            max-width: 420px;
            margin-inline: auto;
        }

    }

    /**
   * responsive for larger than 768px screen
   */

    @media (min-width: 768px) {
        /**
     * REUSED STYLE
     */

        .grid-list {
            grid-template-columns: 1fr 1fr;
        }

        :is(.service, .event) .container {
            max-width: 820px;
        }

        :is(.service, .event) .grid-list li:last-child {
            grid-column: 1 / 3;
            width: calc(50% - 20px);
            margin-inline: auto;
        }
    }


    @media (min-width: 992px) {
        /**
     * CUSTOM PROPERTY
     */

        :root {
            /**
       * spacing
       */

            --section-space: 100px;
        }

        /**
     * REUSED STYLE
     */

        :is(.service, .event) .container {
            max-width: unset;
        }

        :is(.service, .event) .grid-list {
            grid-template-columns: repeat(3, 1fr);
        }

        :is(.service, .event) .grid-list li:last-child {
            grid-column: auto;
            width: 100%;
        }

        .service .shape {
            display: block;
        }

        .service .shape-1 {
            bottom: 0;
            left: 0;
        }

        .service .shape-2 {
            top: 0;
            right: 0;
        }


    }

    /**
   * responsive for larger than 1200px screen
   */

    @media (min-width: 1200px) {
        /**
     * CUSTOM PROPERTY
     */

        :root {
            /**
       * typography
       */

            --fontSize-title-2: 2.5rem;
        }

        /**
     * REUSED STYLE
     */

        .container,
        :is(.service, .event) .container {
            max-width: 1200px;
            width: 100%;
            margin-inline: auto;
        }


    }


    .grid-list {
        display: grid;
        gap: 40px;
        max-height: 600px;
        /* Set a fixed height for the container */
        overflow-y: auto;
        /* Enable vertical scrolling */
        padding-right: 20px;
        /* Add some padding for the scrollbar */
    }

    /* Style the scrollbar */
    .grid-list::-webkit-scrollbar {
        width: 8px;
    }

    .grid-list::-webkit-scrollbar-track {
        background-color: var(--smoky-black-1);
        border-radius: 4px;
    }

    .grid-list::-webkit-scrollbar-thumb {
        background-color: var(--gold-crayola);
        border-radius: 4px;
    }

    .grid-list::-webkit-scrollbar-thumb:hover {
        background-color: var(--white-alpha-20);
    }

    .card-actions {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 15px;
        position: relative;
        z-index: 2;
        /* Added z-index */
    }

    .btn-action {
        padding: 5px 15px;
        border-radius: 4px;
        font-size: var(--fontSize-label-2);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-3);
        transition: var(--transition-1);
        position: relative;
        z-index: 2;
    }

    .btn-view {
        background-color: var(--gold-crayola);
        color: var(--smoky-black-1);
    }

    .btn-edit {
        background-color: var(--white-alpha-20);
        color: var(--white);

    }

    .btn-delete {
        background-color: #dc3545;
        color: var(--white);
        width: 100%;
    }

    .btn-action:hover {
        opacity: 0.8;
        transform: translateY(-2px);
    }

    .delete-form {
        margin: 0;
    }
</style>