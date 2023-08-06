<x-layout>
    <x-navbar/>
    <main class="text-white mt-10 container mx-auto space-y-80">
        <section class="relative">
            <h1 class="text-9xl backgroundText font-bold opacity-5 text-center z-0 pointer-events-none absolute">the lyf so short, the craft so long to lerne</h1>
            <div class="mt-20 z-50">
                <div class=" flex flex-col gap-4">
                    <p class="text-md text-gray-400">انا محمد، مهندس برمجيات</p>
                    <p class="text-6xl">أستطيع تحويل</p>
                    <p class="text-6xl">أفكارك لواقع.</p>
                </div>
                <div  class="my-6">
                    <a href="#work" class="text-white bg-[#1A64F5] py-2 px-6 text-xl rounded">أعمالي.</a>
                    <a href=""></a>
                </div>
            </div>
        </section>

        <section class="relative">
            <x-section-title :id="'blog'">
                التدوينات
            </x-section-title>

            <x-card-container>
                <x-card :src="'https://source.unsplash.com/a-tube-of-toothpaste-sitting-on-top-of-a-table-HUmTboaiTGU'" :span="'12'">
                    كيف تخلق تزرع قواعد البيانات
                    <x-card-footer>
                        <a 
                        href="/posts"
                        class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex gap-1">
                            رؤية التدوينة
                            <x-svg :name="'post'" :width="'25'" :height="'25'"/>
                        </a>
                    </x-card-footer>
                </x-card>

                <x-card :src="'https://source.unsplash.com/zozRCYU7czY'" :span="'6'">
                    كيف تخلق تزرع قواعد البيانات
                    <x-card-footer>
                        <a 
                        href="/posts"
                        class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex gap-1">
                            رؤية التدوينة
                            <x-svg :name="'post'" :width="'25'" :height="'25'"/>
                        </a>
                    </x-card-footer>
                </x-card>

                
                <x-card :src="'https://source.unsplash.com/-SCWZGo99Q4'" :span="'6'">
                    كيف تخلق تزرع قواعد البيانات
                    <x-card-footer>
                        <a 
                        href="/posts"
                        class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex gap-1">
                            رؤية التدوينة
                            <x-svg :name="'post'" :width="'25'" :height="'25'"/>
                        </a>
                    </x-card-footer>
                </x-card>
            </x-card-container>

            <div class=" flex items-center gap-1">
                <a href="#" class=" my-4" >رؤية المزيد</a>
                <x-svg :name="'open-page'" :width="'20'" :height="'20'"/>
            </div>
        </section>

        <section class="relative">
            <x-section-title :id="'work'">
                أعمالي
            </x-section-title>

            <x-card-container>
                <x-card :src="'https://source.unsplash.com/a-tube-of-toothpaste-sitting-on-top-of-a-table-HUmTboaiTGU'" :span="'12'">
                    كيف تخلق تزرع قواعد البيانات
                    <x-card-footer>
                        <div class=" flex items-center gap-4">
                            <a 
                            href="/posts"
                            class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex items-center gap-1">
                            رؤيةالمشروع
                            <x-svg :name="'work'" :width="'20'" :height="'20'"/> 
                            </a>
                            <a 
                            href="/posts"
                            class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex items-center gap-1">
                            الاكواد
                            <x-svg :name="'code'" :width="'25'" :height="'25'"/> 
                            </a>
                        </div>
                    </x-card-footer>
                </x-card>

                <x-card :src="'https://source.unsplash.com/zozRCYU7czY'" :span="'6'">
                    كيف تخلق تزرع قواعد البيانات
                    <x-card-footer>
                        <div class=" flex items-center gap-4">
                            <a 
                            href="/posts"
                            class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex items-center gap-1">
                            رؤيةالمشروع
                            <x-svg :name="'work'" :width="'20'" :height="'20'"/> 
                            </a>
                            <a 
                            href="/posts"
                            class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex items-center gap-1">
                            الاكواد
                            <x-svg :name="'code'" :width="'25'" :height="'25'"/> 
                            </a>
                        </div>
                    </x-card-footer>
                </x-card>

                
                <x-card :src="'https://source.unsplash.com/-SCWZGo99Q4'" :span="'6'">
                    كيف تخلق تزرع قواعد البيانات
                    <x-card-footer>
                        <div class=" flex items-center gap-4">
                            <a 
                            href="/posts"
                            class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex items-center gap-1">
                            رؤيةالمشروع
                            <x-svg :name="'work'" :width="'20'" :height="'20'"/> 
                            </a>
                            <a 
                            href="/posts"
                            class="text-white border-transparent border-b-2 hover:border-b-[#1A64F5] duration-100 flex items-center gap-1">
                            الاكواد
                            <x-svg :name="'code'" :width="'25'" :height="'25'"/> 
                            </a>
                        </div>
                    </x-card-footer>
                </x-card>
            </x-card-container>
            <div class=" flex items-center gap-1">
                <a href="#" class=" my-4" >رؤية المزيد</a>
                <x-svg :name="'open-page'" :width="'20'" :height="'20'"/>
            </div>
        </section>

        <section class="relative">
            <x-section-title :id="'about'">
                عني
            </x-section-title>

            <div class=" flex justify-around mt-10">
                <div class=" leading-10 space-y-14">
                    <div>
                        <p class=" text-sm text-gray-400">اسمي محمد</p>
                        <p>مهندس برمجيات شغوف بتطوير وتصميم تطبيقات الويب التي تحل مشاكل العالم الحقيقية</p>
                        <p>كمتدرب حصلت على خبرة تطوير وصيانة الانظمة في التجمع الصحي لدى حائل حاصل على شهادة علوم الحاسب من جامعة حائل</p>
                        <p>متحمس لتعلم التقنيات الجديدة وطرق أفضل لحل مشاكل تطوير الويب، أسعى من خلالها تحسين مهاراتي في الحرفة</p>    
                    </div>

                    <div class="flex gap-2 justify-center items-center">
                        <a 
                        href="https://twitter.com/MhmdFayedh" 
                        target="_blank"
                        >
                            <x-svg 
                            :name="'twitter'"
                            :width="'40'"
                            />
                        </a>

                        <a 
                        href="https://www.linkedin.com/in/mhmdfayedh"
                        target="_blank"
                        >
                            <x-svg 
                            :name="'linkedin'" 
                            :width="'40'" 
                            />
                        </a>
                        
                        <a 
                        href="https://github.com/MhmdFayedh"
                        target="_blank"
                        >
                            <x-svg 
                            :name="'github'" 
                            :width="'40'"
                            />
                        </a>
                    </div>
                    
                </div>
                
                <div>
                    <img src="https://picsum.photos/id/300/300" class=" rounded" alt="personal image of myself">
                </div>
            </div>
        </section>

        <section class="relative">
            <x-section-title :id="'contact'">
                تواصل
            </x-section-title>

            <form 
            {{-- action="/contact" --}}
            method="POST"
            >
                <div class="text-center mt-10 mb-6">
                    <div class="mb-6 w-full">
                        <label class="block mb-2 uppercase font-bold text-md" for="subject">
                            العنوان
                        </label>
                        <input class="border border-transparent rounded-md bg-[#141923] focus:bg-[#0b141d] py-2 px-2 w-1/2 caret-[#fff] accent-[#fff]" type="text" name="subject" id="subject" required>
                        @error('subject')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6 w-full">
                        <label class="block mb-2 uppercase font-bold text-md" for="email">
                            الايميل
                        </label>
                        <input class="border border-transparent rounded-md bg-[#141923] focus:bg-[#0b141d] py-2 px-2 w-1/2 caret-[#fff] accent-[#fff]" type="text" name="email" id="email" required>
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <div class="mb-6 w-full">
                        <label class="block mb-2 uppercase font-bold text-md" for="message">
                            الرسالة
                        </label>
                        <textarea class="border border-transparent rounded-md bg-[#141923] focus:bg-[#0b141d] py-2 px-2 w-1/2 caret-[#fff] accent-[#fff]" name="message" id="message" cols="30" rows="10"></textarea>
                        @error('message')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
    
                    <button class="text-white bg-[#1A64F5] rounded py-1 px-4">أرسل</button>
                </div>
            </form>
        </section>
    </main>
</x-layout>
