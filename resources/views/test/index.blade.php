@extends('layouts.app')
@section('title', 'Test')

@section('content')
    <section>
        <form id="contact-form">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            {{-- <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br><br> --}}

            <button type="submit">Send</button>
        </form>

        <div id="response"></div>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </section>
@endsection


@section('scripts')
    <script src="/assets/js/ajax.js"></script>
@endsection