  <?php
  ?>
  <style>
  @keyframes background-pan {
    0% {
      background-position: 0% center;
    }
    100% {
      background-position: -200% center;
    }
  }

  .animated-gradient-border {
      background: linear-gradient(
          90deg,
          #00f5ff, /* Bright Cyan */
          #ff00f5, /* Bright Magenta */
          #f5ff00, /* Bright Yellow */
          #00f5ff  /* Repeat Bright Cyan for a seamless loop */
      );
      background-size: 200%;
      animation: background-pan 3s linear infinite;
  }
  </style>

  <div class="max-w-6xl mx-auto rounded-3xl p-1 animated-gradient-border">
    <div class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-slate-100 rounded-2xl p-10">
      <div class="md:grid md:grid-cols-4 gap-10">
          <!-- Sidebar -->
          <div class="col-span-1 bg-slate-800/50 p-8 rounded-2xl flex flex-col items-center text-center">
              <img class="w-40 h-40 rounded-full object-cover ring-4 ring-purple-500 shadow-lg" src="img/phoebe.jpeg" alt="Kevin Kristian Pakpahan">
              <h1 class="mt-6 text-4xl font-extrabold text-white">Kevin Kristian Pakpahan</h1>
              <p class="text-slate-400 mt-2 text-lg">Full-Stack Developer</p>
              <div class="mt-6 flex space-x-6 text-slate-500 justify-center">
                  <a href="#" aria-label="LinkedIn" class="hover:text-purple-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                  <a href="https://github.com/yazechi" aria-label="GitHub" class="hover:text-purple-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg></a>
                  <a href="#" aria-label="Twitter" class="hover:text-purple-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.299 1.634 4.212 3.792 4.649-.562.152-1.158.23-1.783.23-.298 0-.586-.029-.873-.081.603 1.884 2.345 3.267 4.416 3.306-1.621 1.276-3.674 2.031-5.912 2.031-.384 0-.762-.022-1.135-.067 2.099 1.352 4.606 2.146 7.34 2.146 8.808 0 13.628-7.29 13.628-13.628 0-.208 0-.415-.012-.622.936-.676 1.748-1.519 2.4-2.494z"/></svg></a>
              </div>
          </div>

          <!-- Main content -->
          <div class="col-span-3 space-y-12 mt-12 md:mt-0">
              <section>
                  <h2 class="text-4xl font-bold text-white border-b-4 border-purple-500 pb-3 mb-6">About Me</h2>
                  <p class="text-slate-300 leading-relaxed text-lg max-w-3xl">
                      Beginner in the programming world. Enthusiastic and willing to challenge myself with new things. Dreaming of becoming a proper software engineer and a Game Developer in the future.
                  </p>
              </section>

              <section>
                  <h2 class="text-4xl font-bold text-white border-b-4 border-purple-500 pb-3 mb-6">Skills</h2>
                  <div class="flex flex-wrap gap-4 max-w-3xl">
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">PHP</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">JavaScript</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">MySQL</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">HTML5</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">CSS3</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">Tailwind CSS</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">C#</span>
                      <span class="bg-purple-400/20 text-purple-300 text-sm font-semibold px-5 py-3 rounded-full shadow-md hover:bg-purple-400/30 transition">Node.js</span>
                  </div>
              </section>

              <section>
                  <h2 class="text-4xl font-bold text-white border-b-4 border-purple-500 pb-3 mb-6">Projects</h2>
                  <div class="grid md:grid-cols-2 gap-8">
                      <div class="bg-slate-800/60 rounded-xl p-6 shadow-lg hover:shadow-purple-500/20 transition-shadow border border-slate-700 hover:border-purple-500">
                          <h3 class="text-2xl font-semibold text-white mb-2">Personal Website</h3>
                          <p class="text-slate-400 mb-4">A web app built with PHP and JavaScript to make a personal Portfolio and let user add memos and track Project ideas.</p>
                          <a href="https://github.com/Yazechi/Personal-Website" class="text-purple-400 hover:text-purple-300 font-semibold underline">View Project</a>
                      </div>
                      <div class="bg-slate-800/60 rounded-xl p-6 shadow-lg hover:shadow-purple-500/20 transition-shadow border border-slate-700 hover:border-purple-500">
                          <h3 class="text-2xl font-semibold text-white mb-2">Simple RPG Game with C#</h3>
                          <p class="text-slate-400 mb-4">A simple RPG game with with .NET Framework in C#.</p>
                          <a href="https://github.com/Yazechi/CSharp-GameDevelopment-Learning" class="text-purple-400 hover:text-purple-300 font-semibold underline">View Project</a>
                      </div>
                  </div>
              </section>

              <section>
                  <h2 class="text-4xl font-bold text-white border-b-4 border-purple-500 pb-3 mb-6">Experience</h2>
                  <ul class="list-disc list-inside space-y-3 text-slate-300 max-w-3xl">
                      <li><span class="font-semibold text-white">Intern Developer</span> at XYZ Company (2023) - Assisted in building internal tools using PHP and JavaScript.</li>
                      <li><span class="font-semibold text-white">Freelance Web Developer</span> (2022-Present) - Developed websites and web apps for small businesses.</li>
                  </ul>
              </section>

              <section>
                  <h2 class="text-4xl font-bold text-white border-b-4 border-purple-500 pb-3 mb-6">Education</h2>
                  <ul class="list-disc list-inside space-y-3 text-slate-300 max-w-3xl">
                      <li><span class="font-semibold text-white">Bachelor of Computer Science</span> - University ABC (Expected 2026)</li>
                      <li><span class="font-semibold text-white">Online Courses</span> - Various platforms including Marscode Academy</li>
                  </ul>
              </section>

              <section>
                  <h2 class="text-4xl font-bold text-white border-b-4 border-purple-500 pb-3 mb-6">Contact</h2>
                  <p class="text-slate-300 max-w-3xl mb-4">Feel free to reach out via email or social media:</p>
                  <div class="flex space-x-6 text-slate-400">
                      <a href="mailto: pakpahank5@gmail.com" class="hover:text-purple-300 transition">pakpahank5@gmail.com</a>
                      <a href="#" class="hover:text-purple-300 transition">LinkedIn</a>
                      <a href="https://github.com/yazechi" class="hover:text-purple-300 transition">GitHub</a>
                  </div>
              </section>
          </div>
      </div>
    </div>
  </div>
