<div class="footer">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-large is-custom-padding-bottom">
          <div class="footer_component">
            <div class="margin-bottom margin-large new">
              <div class="footer2_content">
                <div class="footer2_content-left"><a href="/" aria-current="page" class="footer_logo-link-block w-inline-block w--current"><img src="Assets/dents.talk-rounf.png" loading="lazy" alt="" class="foote_logo" /></a></div>
                <div class="footer2_content-right _5-column">
                <div class="footer2_links-col">
                    <div class="text-weight-bold text-style-allcaps">Courses</div>
                    @foreach ($programs as $link)
                    <div class="footer2_links-list"><a href="/{{ $link["link"] }}" class="footer2_link-2">{{ $link["judul"] }}</a></div>
                    @endforeach
                </div>
                <div class="footer2_links-col">
                    <div class="text-weight-bold text-style-allcaps">Articles</div>
                    @foreach ($articles as $link)
                    <div class="footer2_links-list"><a href="/{{ $link["link"] }}" class="footer2_link-2">{{ $link["judul"] }}</a></div>
                    @endforeach
                </div>
                </div>
              </div>
            </div>
            <div class="footer_bottom-row">
              <div class="footer_bottom-left-column">
                <div class="footer_copyright">© 2022 Dents.Talk <br />All Rights Reserved</div>
              </div>
              <div class="footer_bottom-center-column">
                <div class="footer_email text-align-center mobile-text-right">More Questions? Email us at <br /><a href="mailto:LoremIpsum@dolor.sit"><span class="footer_email-span">LoremIpsum@dolor.sit</span></a></div>
              </div>
              <div class="footer_bottom-right-column">
                <a href="https://www.instagram.com/Loremipsumdolorsitamet/" target="_blank" class="footer_social-link-block w-inline-block"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c6a04c60ba3_instagram%20footer.svg" loading="lazy" alt="" class="footer_logo-instagram" /></a>
                <a href="https://www.linkedin.com/Loremipsumdolorsitamet" target="_blank" class="footer_social-link-block w-inline-block"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c060fc60ba7_linkedin%20footer.svg" loading="lazy" alt="" class="footer_logo-linkedin" /></a>
                <a href="https://twitter.com/Loremipsumdolorsitamet" target="_blank" class="footer_social-link-block w-inline-block"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38cd880c60ba4_twitter%20footer.svg" loading="lazy" alt="" class="footer_logo-twitter" /></a>
                <a href="https://www.tiktok.com/@Loremipsumdolorsitamet" target="_blank" class="footer_social-link-block w-inline-block"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/627ccb53abf3c0761681b566_Untitled%20design%20(18).png" loading="lazy" alt="" class="footer_logo-facebook" /></a>
                <a href="https://www.youtube.com/c/Loremipsumdolorsitamet" target="_blank" class="footer_social-link-block w-inline-block"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/627cb8ac395b0eb98ed3b5c0_1.png" loading="lazy" alt="" class="footer_logo-youtube" /></a>
                <a href="https://open.spotify.com/show/Loremipsumdolorsitamet" target="_blank" class="footer_social-link-block w-inline-block"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/627cb8ac5960af1f7ca0bc0e_2.png" loading="lazy" alt="" class="footer_logo-spotify" /></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
