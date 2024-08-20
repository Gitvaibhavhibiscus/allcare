class LiteYTEmbed extends HTMLElement {
  connectedCallback() {
    this.embedCode = this.getAttribute('embedcode');

    let playBtnEl = this.querySelector('.lty-playbtn');
    this.playLabel =
      (playBtnEl && playBtnEl.textContent.trim()) ||
      this.getAttribute('playlabel') ||
      'Play';

    if (!this.style.backgroundImage) {
      this.style.backgroundImage = `url("https://i.ytimg.com/vi/${this.extractVideoId(this.embedCode)}/sddefault.jpg")`;
    }

    if (!playBtnEl) {
      playBtnEl = document.createElement('button');
      playBtnEl.type = 'button';
      playBtnEl.classList.add('lty-playbtn');
      this.append(playBtnEl);
    }
    if (!playBtnEl.textContent) {
      const playBtnLabelEl = document.createElement('span');
      playBtnLabelEl.className = 'lyt-visually-hidden';
      playBtnLabelEl.textContent = this.playLabel;
      playBtnEl.append(playBtnLabelEl);
    }
    playBtnEl.removeAttribute('href');

    this.addEventListener('pointerover', LiteYTEmbed.warmConnections, { once: true });
    this.addEventListener('click', this.addIframe);

    this.needsYTApiForAutoplay = navigator.vendor.includes('Apple') || navigator.userAgent.includes('Mobi');
  }

  static addPrefetch(kind, url, as) {
    const linkEl = document.createElement('link');
    linkEl.rel = kind;
    linkEl.href = url;
    if (as) {
      linkEl.as = as;
    }
    document.head.append(linkEl);
  }

  static warmConnections() {
    if (LiteYTEmbed.preconnected) return;

    LiteYTEmbed.addPrefetch('preconnect', 'https://www.youtube-nocookie.com');
    LiteYTEmbed.addPrefetch('preconnect', 'https://www.google.com');
    LiteYTEmbed.addPrefetch('preconnect', 'https://googleads.g.doubleclick.net');
    LiteYTEmbed.addPrefetch('preconnect', 'https://static.doubleclick.net');

    LiteYTEmbed.preconnected = true;
  }

  fetchYTPlayerApi() {
    if (window.YT && window.YT.Player) return Promise.resolve();

    this.ytApiPromise = new Promise((resolve, reject) => {
      const scriptEl = document.createElement('script');
      scriptEl.src = 'https://www.youtube.com/iframe_api';
      scriptEl.onload = resolve;
      scriptEl.onerror = reject;
      document.head.appendChild(scriptEl);
    });

    return this.ytApiPromise;
  }

  extractVideoId(embedCode) {
    const match = embedCode.match(/embed\/([a-zA-Z0-9_-]{11})/);
    return match && match[1];
  }

  async addYTPlayerIframe(params) {
    await this.fetchYTPlayerApi();

    const embedContainerEl = document.createElement('div');
    embedContainerEl.classList.add('lyt-embed-container');
    this.append(embedContainerEl);

    const player = new YT.Player(embedContainerEl, {
      videoId: this.extractVideoId(this.embedCode),
      playerVars: params,
      events: {
        onReady: (event) => {
          event.target.playVideo();
        },
      },
    });
  }

  async addIframe() {
    if (this.classList.contains('lyt-activated')) return;
    this.classList.add('lyt-activated');

    const params = new URLSearchParams(this.getAttribute('params') || []);
    params.append('autoplay', '1');
    params.append('playsinline', '1');
    params.append('mute', '1'); // Add the mute parameter

    if (this.needsYTApiForAutoplay) {
      return this.addYTPlayerIframe(params.toString());
    }

    const embedContainerEl = document.createElement('div');
    embedContainerEl.classList.add('lyt-embed-container');
    this.append(embedContainerEl);

    const thumbnailEl = this.querySelector('.lty-playbtn');
    if (thumbnailEl) {
      thumbnailEl.style.display = 'none'; // Hide the thumbnail element
    }

    const iframeEl = document.createElement('iframe');
    iframeEl.width = '100%';
    iframeEl.height = '460px';
    iframeEl.title = this.playLabel;
    iframeEl.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
    iframeEl.allowFullscreen = true;
    iframeEl.muted = true; // Mute the video
    iframeEl.src = `https://www.youtube.com/embed/${this.extractVideoId(this.embedCode)}?${params.toString()}`;
    embedContainerEl.append(iframeEl);

    iframeEl.focus();
  }
}

customElements.define('lite-youtube', LiteYTEmbed);
