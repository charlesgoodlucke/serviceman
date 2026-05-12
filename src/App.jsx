import React from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import Bookings from './components/Bookings';
import Features from './components/Features';
import Testimonials from './components/Testimonials';
import Footer from './components/Footer';
import CookieConsent from './components/CookieConsent';

function App() {
  return (
    <div className="bg-brand-background min-h-screen text-brand-dark font-sans overflow-hidden selection:bg-brand-primary/30 selection:text-brand-primary">
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
  );
}

export default App;
