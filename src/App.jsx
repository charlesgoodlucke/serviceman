import React, { useState, useEffect, useRef } from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import Bookings from './components/Bookings';
import Features from './components/Features';
import Testimonials from './components/Testimonials';
import Footer from './components/Footer';
import CookieConsent from './components/CookieConsent';

function App() {
  const [scale, setScale] = useState(1);
  const [containerHeight, setContainerHeight] = useState('auto');
  const contentRef = useRef(null);

  useEffect(() => {
    const handleResize = () => {
      const width = window.innerWidth;
      const newScale = width < 1280 ? width / 1280 : 1;
      setScale(newScale);
    };

    handleResize();
    window.addEventListener('resize', handleResize);
    
    // Create ResizeObserver to track content height changes
    const observer = new ResizeObserver((entries) => {
      for (let entry of entries) {
        const height = entry.contentRect.height;
        // The scale here might be stale, so we calculate it again or use a ref
        const currentWidth = window.innerWidth;
        const currentScale = currentWidth < 1280 ? currentWidth / 1280 : 1;
        setContainerHeight(height * currentScale);
      }
    });

    if (contentRef.current) {
      observer.observe(contentRef.current);
    }

    return () => {
      window.removeEventListener('resize', handleResize);
      observer.disconnect();
    };
  }, []);

  return (
    <div 
      className="bg-brand-background min-h-screen text-brand-dark font-sans selection:bg-brand-primary/30 selection:text-brand-primary overflow-x-hidden"
      style={{ height: containerHeight }}
    >
      <div 
        ref={contentRef}
        style={{ 
          transform: `scale(${scale})`, 
          transformOrigin: 'top left',
          width: '1280px',
          height: 'auto',
          position: 'absolute',
          top: 0,
          left: 0,
        }}
      >
        <Navbar />

        <main>
          <Hero />
          <Bookings />
          <Features />
          <Testimonials />
        </main>

        <Footer />
        <CookieConsent />
      </div>
    </div>
  );
}

export default App;
