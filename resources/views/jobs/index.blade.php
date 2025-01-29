<x-layout> 
<x-slot:heading>
Job Listing
</x-slot:heading>

<div class="space-y-4">
@foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-400 rounded-lg">
        <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
    <div>
    <strong class="text-laracasts">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
    </div>
</a>
@endforeach
<div>
    {{ $jobs->links() }}
</div>







//----------------------------------------------
<hr style="border: 1px solid black">
<h1 style="font-size: 20px">Create a Job</h1>
<br>
<a href='jobs/create' class="custom-button">Create</a>
<style>
    .custom-button {
  border: 1.5px solid black;
  border-radius: 2rem;
  padding: 4px 10px;
  border-color: blue;
  text-decoration: none;
  color: black;
  display: inline-block;
  transition: all 0.3s ease;
  cursor: pointer;
}

.custom-button:hover {
  background-color:rgb(242, 227, 227);
  color: blue;
  transform: scale(1.3);
}
</style>
</div>
</x-layout>