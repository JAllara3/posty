@extends('layouts.app')

@section('content')
    <div class="flex justify-center justify-items-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            <span>Laravel Blog!</span>
        </div>
    </div>

    <div class="flex justify-center justify-items-center mt-2">
        <div class="flex w-10/12 justify-center">
            <div class="bg-white p-6 rounded-lg w-5/12 mr-2 ">
                <h2 class="text-2xl">Current status</h2>
                <ul class="list-disc list-outside">
                    <li>This website allows people to register an account, and makes posts that others can like and comment on.</li>
                    <li>You can also delete and edit your own posts.</li>
                    <li>users can navigate to other users pages and view what they are talking about.</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg w-5/12">
                <h2 class="text-2xl">Updates in progress: </h2>
                <ul class="list-disc list-outside">
                    <li>Ability for users to select from a set of images for a profile picture.</li>
                    <li>Add the ability to tag your posts and allow users to filter posts by tag.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection