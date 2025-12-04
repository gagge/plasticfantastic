<x-mainLayout>
    <x-slot:title>
        Records
    </x-slot:title>
    <h1>Records</h1>

    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>ISRC</th>
          <th>Release Date</th>
          <th>Record Label</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($records as $record)
          <tr>
            <td>{{ $record->title }}</td>
            <td>{{ $record->isrc }}</td>
            <td>{{ $record->release_date }}</td>
            <td>{{ $record->recordLabel->name }}</td>
            <td>{{ $record->type }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
</x-mainLayout>