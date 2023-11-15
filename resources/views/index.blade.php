@extends('layouts.app')

@section('content')
<div class="space-y-2 pt-6 pb-8 md:space-y-5">
    {{-- Đối với truyền nội dung tĩnh (Nội dung cứng) --}}
    <x-header title="Latest Article">
        <p class="text-lg leading-7 text-gray-500 dark:text-gray-400 border-b-2 border-neutral-700 pb-10">
            Learn more about Laravel and Tailwind CSS
        </p>
    </x-header>

    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($posts as $post)
            {{--
                Đối với truyền nội dung động (Nội dung có thể thay thế được) (truyền biến trong laravel) thì phải thêm dấu : vào trước
                trước tên biến lúc này
            --}}
            <x-blog.blog-item :post="$post" />
        @endforeach
    </div>
</div>fdssf
@endsection
