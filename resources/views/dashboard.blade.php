<style>
    /* Adjust margins and padding for better spacing */
.mb-3 {
  margin-bottom: 1.5rem;
}

/* Style form labels */
.form-label {
  font-weight: bold;
}

/* Style form inputs */
.form-control {
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

/* Style submit button */
.btn-primary {
  color: black;
  background-color: #007bff;
  border-color: #007bff;
  border-radius: 0.25rem;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
    box-shadow 0.15s ease-in-out;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

   <div class="mb-3">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">App Name</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>

          <div class="mb-3">
            <label for="organization" class="form-label">Organization</label>
            <input type="text" class="form-control" name="organization" id="organization" placeholder="Enter organization">
          </div>

          <div class="mb-3">
            <label for="Platforms" class="form-label">Compatible Platform(s) and Version(s)</label>
            <input type="text" class="form-control" name="platforms" id="platforms" placeholder="Enter compatible platforms">
          </div>

          <div class="mb-3">
            <label for="links" class="form-label">External Links</label>
            <input type="text" class="form-control" name="links" id="organization" placeholder="Enter links">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Request App</button>

    </form>

</div>
</x-app-layout>