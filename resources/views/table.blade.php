@extends('layouts.app')
@section('title', 'table')
@section('content')
    <div>
        <table class="min-w-full bg-white border border-gray-200 mt-4">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Age</th>
                    <th class="px-4 py-2 border">Email</th>
                </tr>
            </thead>
            <tbody>

                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">Dhimas</td>
                    <td class="px-4 py-2 border">21</td>
                    <td class="px-4 py-2 border">aa.email.com</td>
                </tr>

            </tbody>
        </table>

        <x-card title="ini card">
            <p>This section allows you to manage and upload your certificates efficiently.</p>
        </x-card>
    </div>
@endsection
