
@foreach($language as $ite)
    @dump($ite->id)

@endforeach
{{--@dump($language->id)--}}

{{ $language->links() }}{{--გვერდის გადანომვრა--}}


