<?php include "./icnludes/header.php";  ?>
<?php include "../controllers/selectController.php"; ?>

<!-- component -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">image</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">username</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">email</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($result as $key => $value) : ?>
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-8 font-normal text-gray-900">
                        <?= ++$key; ?>
                    </th>
                    <td class="px-6 py-4">
                        <div class="relative h-10 w-10">
                            <img class="h-full w-full rounded-full object-cover object-center" src="<?= "data:image/jpeg;base64," . $value['image']; ?>" alt="" />
                            <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['username']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['email']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="./update.php?id=<?= $value['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="../controllers/deleteController.php?id=<?= $value['id'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<a href="./create.php" class="btn btn-success">Create</a>

<?php include "./icnludes/footer.php";  ?>