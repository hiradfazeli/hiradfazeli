
<section class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    <p class="mb-8 lg:mb-16 text-center text-secondary sm:text-xl">
        Need details about my business plan? Let me know.
    </p>
    <form action="#" method="POST" class="space-y-8">
        {{ csrf_field() }}
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-secondary">
                Your email
            </label>
            <input type="email" id="email"
                class="shadow-sm bg-secondary text-primary text-sm
                    block w-full p-2.5"
                placeholder="name@example.com" required>
        </div>
        <div>
            <label for="subject" class="block mb-2 text-sm font-medium text-secondary">
                Subject
            </label>
            <input type="text" id="subject"
                class="block p-3 w-full text-sm text-primary bg-secondary shadow-sm"
                placeholder="Let me know how I can help you" required>
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-sm font-medium text-secondary">
                Your message
            </label>
            <textarea id="message" rows="6"
                class="block p-2.5 w-full text-sm text-primary bg-secondary
            shadow-sm"
                placeholder="Leave a comment..."></textarea>
        </div>
        <button type="submit"
            class="py-3 px-5 text-sm font-medium text-center text-secondary bg-primary
        sm:w-fit hover:bg-secondary hover:text-primary ring-4 ring-secondary focus:ring-4">
            Send message
        </button>
    </form>
</section>
