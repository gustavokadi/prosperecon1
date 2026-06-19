from playwright.sync_api import sync_playwright
import os

BASE = os.path.dirname(os.path.abspath(__file__))
HTML = f"file://{BASE}/carrossel.html"
OUT  = os.path.join(BASE, "instagram")
os.makedirs(OUT, exist_ok=True)

with sync_playwright() as p:
    browser = p.chromium.launch()
    page = browser.new_page(viewport={"width": 1080, "height": 1350})
    page.goto(HTML, wait_until="networkidle")

    slides = page.query_selector_all(".slide")
    print(f"Encontrei {len(slides)} slides")

    for i, slide in enumerate(slides, 1):
        path = os.path.join(OUT, f"slide-{i:02d}.png")
        slide.screenshot(path=path)
        print(f"  ✓ slide-{i:02d}.png")

    browser.close()
    print(f"\nPronto — {len(slides)} PNGs em instagram/")
