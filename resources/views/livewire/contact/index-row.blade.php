<tr class="bg-white">
    <th scope="row" class="col">
        {{$contact->name}}
    </th>
    <td>
        {{$contact->email}}
    </td>
    <td>
        {{$contact->phone}}
    </td>
    <td>
        <div class="d-flex align-items-center">
            <a href="{{ route('contact.view',  $contact->id) }}" target="_blank" class="mr-3">
                <x-icons.eye-on class="w-5 h-5 text-black"/>
            </a>
            <a href="{{ route('contact.edit',  $contact->id) }}" target="_blank">
                <x-icons.pencil class="w-5 h-5 text-black"/>
            </a>
        </div>
    </td>
</tr>
