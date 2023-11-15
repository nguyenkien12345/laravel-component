{{--
    @props trong Laravel được sử dụng để định nghĩa các thuộc tính (props) mà một Laravel component có thể chấp nhận
--}}
@props([
    'disabled' => false,    // Nếu người dùng không truyền lên thuộc tính disable thì giá trị mặc định sẽ là false
    'type' => 'text',       // Nếu người dùng không truyền lên thuộc tính type thì giá trị mặc định sẽ là text
    'name',
    'placeholder'
])

<input
type="{{ $type }}"
name="{{ $name }}"
placeholder="{{ $placeholder }}"
{{ $disabled ? 'disabled' : '' }}
{!!
    $attributes->merge(
        [
            'class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
        ]
    )
!!}
>
