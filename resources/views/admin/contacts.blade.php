@extends('admin.layout.layout')

@section('title', 'Contacts')

@section('content')
    <div class="max-w-7xl mx-auto bg-white rounded-2xl shadow p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Contacts Messages</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Subject</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Message</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">Ahmed Ali</td>
                        <td class="px-4 py-3 text-sm text-gray-600">ahmed@example.com</td>
                        <td class="px-4 py-3 text-sm text-gray-700">Support Request</td>
                        <td class="px-4 py-3 text-sm text-gray-500">
                            I need help with my account login issue.
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">Sara Mohamed</td>
                        <td class="px-4 py-3 text-sm text-gray-600">sara@example.com</td>
                        <td class="px-4 py-3 text-sm text-gray-700">Business Inquiry</td>
                        <td class="px-4 py-3 text-sm text-gray-500">
                            I would like to know more about your services.
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">Omar Hassan</td>
                        <td class="px-4 py-3 text-sm text-gray-600">omar@example.com</td>
                        <td class="px-4 py-3 text-sm text-gray-700">Feedback</td>
                        <td class="px-4 py-3 text-sm text-gray-500">
                            Great platform! Keep up the good work.
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">Mona Adel</td>
                        <td class="px-4 py-3 text-sm text-gray-600">mona@example.com</td>
                        <td class="px-4 py-3 text-sm text-gray-700">Complaint</td>
                        <td class="px-4 py-3 text-sm text-gray-500">
                            I faced an issue while submitting the form.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
