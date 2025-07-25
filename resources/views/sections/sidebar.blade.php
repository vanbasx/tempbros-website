<aside class="top-0 left-0 fixed p-2 h-full">
  <nav id="sidebar" class="flex flex-col justify-between bg-white shadow-xs px-6 py-8 rounded-xl w-22 group-hover/aside:w-60 h-full overflow-hidden transition-all duration-400">
    <div class="flex justify-center w-10">
      <button id="sidebar-btn" class="relative w-6 h-4 cursor-pointer shrink-0">
        <span class="top-0 left-0 absolute bg-neutral-900 rounded-full w-full h-0.5 transition-all duration-400 ease-in-out"></span>
        <span class="top-1/2 left-0 absolute bg-neutral-900 rounded-full w-2/3 group-hover/aside:w-full h-0.5 transition-all -translate-y-1/2 duration-400 ease-in-out"></span>
        <span class="bottom-0 left-0 absolute bg-neutral-900 rounded-full w-1/3 group-hover/aside:w-full h-0.5 transition-all duration-400 ease-in-out"></span>
      </button>
    </div>
    <ul class="flex flex-col gap-2">
      <li>
        <a 
          href="{{ home_url('/') }}"
          class="group/link relative flex items-center gap-2"
        >
          <div class="flex justify-center items-center group-hover/link:bg-neutral-100 rounded-full size-10 transition-colors duration-200 ease-in-out shrink-0">
            <svg data-testid="geist-icon" height="16" stroke-linejoin="round" viewBox="0 0 16 16" width="16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 6.56062L8.00001 2.06062L3.50001 6.56062V13.5L6.00001 13.5V11C6.00001 9.89539 6.89544 8.99996 8.00001 8.99996C9.10458 8.99996 10 9.89539 10 11V13.5L12.5 13.5V6.56062ZM13.78 5.71933L8.70711 0.646409C8.31659 0.255886 7.68342 0.255883 7.2929 0.646409L2.21987 5.71944C2.21974 5.71957 2.21961 5.7197 2.21949 5.71982L0.469676 7.46963L-0.0606537 7.99996L1.00001 9.06062L1.53034 8.53029L2.00001 8.06062V14.25V15H2.75001L6.00001 15H7.50001H8.50001H10L13.25 15H14V14.25V8.06062L14.4697 8.53029L15 9.06062L16.0607 7.99996L15.5303 7.46963L13.7806 5.71993C13.7804 5.71973 13.7802 5.71953 13.78 5.71933ZM8.50001 11V13.5H7.50001V11C7.50001 10.7238 7.72386 10.5 8.00001 10.5C8.27615 10.5 8.50001 10.7238 8.50001 11Z" fill="currentColor"></path></svg>
          </div>
          <span class="invisible group-hover/aside:visible opacity-0 group-hover/aside:opacity-100 text-neutral-500 group-hover/link:text-neutral-900 transition-all duration-200 ease-in-out shrink-0">
            Home
          </span>
        </a>
      </li>
      <li>
        <a 
          href="{{ home_url('/templates') }}" 
          class="group/link relative flex items-center gap-2"
        >
          <div class="flex justify-center items-center group-hover/link:bg-neutral-100 rounded-full size-10 transition-colors duration-200 ease-in-out shrink-0">
            <svg data-testid="geist-icon" height="16" stroke-linejoin="round" viewBox="0 0 16 16" width="16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.25136V4.2487L0.463236 4.05702L7.71324 1.05702L8 0.938354L8.28676 1.05702L15.5368 4.05702L16 4.2487V5.25136L15.5368 5.44304L8.28676 8.44304L8 8.5617L7.71324 8.44304L0.463236 5.44304L0 5.25136ZM0 8.45825V6.83491L0.536764 7.05702L8 10.1453L15.4632 7.05702L16 6.83491V8.45825L8.28676 11.6499L8 11.7686L7.71324 11.6499L0 8.45825ZM0 11.7083V10.0849L0.536764 10.307L8 13.3953L15.4632 10.307L16 10.0849V11.7083L8.28676 14.8999L8 15.0186L7.71324 14.8999L0 11.7083ZM8 6.93835L2.71154 4.75003L8 2.5617L13.2885 4.75003L8 6.93835Z" fill="currentColor"></path></svg>
          </div>
          <span class="invisible group-hover/aside:visible opacity-0 group-hover/aside:opacity-100 text-neutral-500 group-hover/link:text-neutral-900 transition-all duration-200 ease-in-out shrink-0">
            Templates
          </span>
        </a>
      </li>
      <li>
        <a 
          href="{{ home_url('/') }}" 
          class="group/link relative flex items-center gap-2"
        >
          <div class="flex justify-center items-center group-hover/link:bg-neutral-100 rounded-full size-10 transition-colors duration-200 ease-in-out shrink-0">
            <svg data-testid="geist-icon" height="16" stroke-linejoin="round" viewBox="0 0 16 16" width="16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.28497 1.5H13V12C13 12.5523 12.5523 13 12 13H6.28497L6.28497 1.5ZM5.03497 1.5H3V12C3 12.5523 3.44772 13 4 13H5.03497L5.03497 1.5ZM5.03497 14.5H4C2.61929 14.5 1.5 13.3807 1.5 12V1.5V0H3H13H14.5V1.5V12C14.5 13.3807 13.3807 14.5 12 14.5H6.28497V15V15.625H5.03497V15V14.5ZM8.505 3.375H9.13H10.13H10.755V4.625H10.13H9.13H8.505V3.375ZM9.13 6.375H8.505V7.625H9.13H10.13H10.755V6.375H10.13H9.13Z" fill="currentColor"></path></svg>
          </div>
          <span class="invisible group-hover/aside:visible opacity-0 group-hover/aside:opacity-100 text-neutral-500 group-hover/link:text-neutral-900 transition-all duration-200 ease-in-out shrink-0">
            Blog (Soon)
          </span>
        </a>
      </li>
      <li>
        <a 
          href="{{ home_url('/support') }}" 
          class="group/link relative flex items-center gap-2"
        >
          <div class="flex justify-center items-center group-hover/link:bg-neutral-100 rounded-full size-10 transition-colors duration-200 ease-in-out shrink-0">
            <svg data-testid="geist-icon" height="16" stroke-linejoin="round" viewBox="0 0 16 16" width="16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.8914 10.4028L2.98327 10.6318C3.22909 11.2445 3.5 12.1045 3.5 13C3.5 13.3588 3.4564 13.7131 3.38773 14.0495C3.69637 13.9446 4.01409 13.8159 4.32918 13.6584C4.87888 13.3835 5.33961 13.0611 5.70994 12.7521L6.22471 12.3226L6.88809 12.4196C7.24851 12.4724 7.61994 12.5 8 12.5C11.7843 12.5 14.5 9.85569 14.5 7C14.5 4.14431 11.7843 1.5 8 1.5C4.21574 1.5 1.5 4.14431 1.5 7C1.5 8.18175 1.94229 9.29322 2.73103 10.2153L2.8914 10.4028ZM2.8135 15.7653C1.76096 16 1 16 1 16C1 16 1.43322 15.3097 1.72937 14.4367C1.88317 13.9834 2 13.4808 2 13C2 12.3826 1.80733 11.7292 1.59114 11.1903C0.591845 10.0221 0 8.57152 0 7C0 3.13401 3.58172 0 8 0C12.4183 0 16 3.13401 16 7C16 10.866 12.4183 14 8 14C7.54721 14 7.10321 13.9671 6.67094 13.9038C6.22579 14.2753 5.66881 14.6656 5 15C4.23366 15.3832 3.46733 15.6195 2.8135 15.7653Z" fill="currentColor"></path></svg>
          </div>
          <span class="invisible group-hover/aside:visible opacity-0 group-hover/aside:opacity-100 text-neutral-500 group-hover/link:text-neutral-900 transition-all duration-200 ease-in-out shrink-0">
            Support
          </span>
        </a>
      </li>
    </ul>
    <a 
      href="https://x.com" 
      target="_blank"
      class="group/link relative flex items-center gap-2"
    >
      <div class="flex justify-center items-center group-hover/link:bg-neutral-100 rounded-full size-10 transition-colors duration-200 ease-in-out shrink-0">
        <svg data-testid="geist-icon" height="16" stroke-linejoin="round" viewBox="0 0 16 16" width="16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 0.5H5.75L9.48421 5.71053L14 0.5H16L10.3895 6.97368L16.5 15.5H11.25L7.51579 10.2895L3 15.5H1L6.61053 9.02632L0.5 0.5ZM12.0204 14L3.42043 2H4.97957L13.5796 14H12.0204Z" fill="currentColor"></path></svg>
      </div>
      <span class="invisible group-hover/aside:visible opacity-0 group-hover/aside:opacity-100 text-neutral-500 group-hover/link:text-neutral-900 text-sm transition-all duration-200 ease-in-out shrink-0">
        x.com<span class="text-neutral-900">/tempbros</span>
      </span>
    </a>
  </nav>
</aside>