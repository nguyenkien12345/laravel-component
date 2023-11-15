<h1 {{
    $attributes->merge(
            [
                // Chúng ta sẽ gộp các class nhận được từ component với các class mặc định có sẵn tại file này (text-3xl pt-10 font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14)
                'class' => 'text-3xl pt-10 font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14'
            ]
        )
    }}
>
    {{ $title }}
</h1>

{{-- Nhận về nội dung được truyền vào giữa cặp thẻ <x-header></x-header> --}}
{{ $slot }}
