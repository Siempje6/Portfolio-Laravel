<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Project Template
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Project Info -->
                <div class="project-info-grid">
                    <div class="project-info">
                        <p class="project-date">
                            04-12-2025
                        </p>
                        <h1 class="project-title" style="font-size: calc(24px + 1.8rem); font-weight: 700; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Project Title</h1>
                        <a href="#" class="project-author">Author</a>
                        <br>
                        <a href="#" class="projectcategory">Category</a>
                        <p class="project-subtext" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 16px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore minus eligendi aspernatur quasi at perferendis, nemo culpa alias blanditiis? Harum quas doloribus eligendi voluptatem possimus mollitia fuga commodi, enim totam?
                        </p>
                    </div>
                    <div class="project-info-highlight">
                        <img src="https://placehold.co/521x400" alt="">
                    </div>
                </div>
                <div class="project-text-grid">
                    <h2 class="project-title">
                        Project Title
                    </h2>       
                    <p class="project-summary">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem sunt ut quo magnam eum deleniti dolore corporis. Fugiat porro, corporis at laudantium expedita odit quidem dolor, ullam aut ipsa vero.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam recusandae soluta autem qui eius officia, aliquam, consectetur doloribus neque expedita, officiis accusantium? Inventore fugit, rerum repudiandae porro voluptate necessitatibus cumque!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis sapiente porro omnis. Nemo qui repudiandae non beatae excepturi eaque ex atque doloremque natus hic ea exercitationem nostrum, itaque, inventore necessitatibus?
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quaerat ut cupiditate porro natus itaque reprehenderit modi voluptate. Possimus iste eaque vero. Dolorem praesentium incidunt labore quia laboriosam, quaerat reprehenderit?
                    </p>
                </div>

                <!-- Gallery -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                    <img src="https://placehold.co/521x400" alt="">
                    <img src="https://placehold.co/521x400" alt="">
                    <img src="https://placehold.co/521x400" alt="">
                    <img src="https://placehold.co/521x400" alt="">
                </div>
            </div>
        </div>
    </div>

    <style>
        .project-info-grid {
            margin: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .project-info {
            grid-column: 1/2;
            margin: 1rem;
        }
        .project-info p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .project-info a {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .project-title {
            margin-top: 0rem;
        }
        .project-subtext {
            margin-top: 1rem;
        }
        .project-info-highlight {
            margin: 1rem;
            grid-column: 2/3;
        }
    </style>
</x-app-layout>